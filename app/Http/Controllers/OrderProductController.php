<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    public function index()
    {
        return response()->json(OrderProduct::with('product', 'order')->get());
    }

    public function show($id)
    {
        $item = OrderProduct::with('product', 'order')->findOrFail($id);
        return response()->json($item);
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        // Check stock
        if ($request->quantity > $product->stock) {
            return response()->json([
                'message' => "'{$product->name}' is out of stock."
            ], 422);
        }

        $item = OrderProduct::create($request->only(['order_id', 'product_id', 'quantity']));

        return response()->json(['message' => 'Order item created', 'data' => $item], 201);
    }

    public function update(Request $request, $id)
    {
        $item = OrderProduct::findOrFail($id);

        $request->validate([
            'quantity' => 'nullable|integer|min:1',
        ]);

        $item->update($request->only(['quantity']));

        return response()->json(['message' => 'Order item updated', 'data' => $item]);
    }

    public function destroy($id)
    {
        $item = OrderProduct::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Order item deleted']);
    }
}
