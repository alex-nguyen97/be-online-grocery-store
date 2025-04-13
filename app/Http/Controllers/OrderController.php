<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\DeliveryDetail;

class OrderController extends Controller
{
    /**
     * Store a newly created order in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'items' => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();

        try {
            // Create Order
            $order = Order::create([
                'user_id' => $request->user_id,
                'status' => 'pending',
            ]);

            // Add Order Items
            foreach ($request->items as $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                ]);
            }

            DB::commit();

            return response()->json(['message' => 'Order created successfully', 'order_id' => $order->id], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to create order', 'details' => $e->getMessage()], 500);
        }
    }

    public function createNewOrder(Request $request)
    {
        $request->validate([
            'delivery.recipient_name' => 'required|string|max:255',
            'delivery.address_street' => 'required|string|max:255',
            'delivery.city_suburb' => 'required|string|max:255',
            'delivery.state_territory' => 'required|string|max:255',
            'delivery.mobile_number' => 'required|string|max:20',
            'delivery.email' => 'required|email|max:255',

            'order.status' => 'nullable|string',
            'order.payment_method' => 'nullable|string',

            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|exists:products,product_id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $result = DB::transaction(function () use ($request) {
            // Create order
            $order = Order::create($request->order);

            // Create delivery and link to order
            $deliveryData = array_merge($request->delivery, ['order_id' => $order->order_id]);
            $delivery = DeliveryDetail::create($deliveryData);

            // Add order items and update product stock
            foreach ($request->products as $products) {
                $product = Product::findOrFail($products['product_id']);

                if ($products['quantity'] > $product->stock) {
                    throw new \Exception(" {$product->name} is out of stock.");
                }

                $product->decrement('stock', $products['quantity']);

                OrderProduct::create([
                    'order_id' => $order->order_id,
                    'product_id' => $products['product_id'],
                    'quantity' => $products['quantity'],
                ]);

                $updatedProducts[] = $product->fresh();
            }

            return [
                'order' => $order,
                'delivery' => $delivery,
                'products' => $updatedProducts,
            ];
        });

        return response()->json([
            'message' => 'Order created successfully!',
            'data' => $result
        ], 201);
    }
}
