<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryDetail;
use Illuminate\Support\Facades\DB;

class DeliveryDetailController extends Controller
{
    public function store(Request $request, $orderId)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'recipient_name' => 'required|string|max:255',
                'address_street' => 'required|string|max:255',
                'city_suburb' => 'required|string|max:255',
                'state_territory' => 'required|string|max:255',
                'mobile_number' => 'required|string|max:20',
                'email' => 'required|email|max:255',
            ]);

            $delivery = DeliveryDetail::create([
                'order_id' => $orderId,
                'recipient_name' => $request->recipient_name,
                'address_street' => $request->address_street,
                'city_suburb' => $request->city_suburb,
                'state_territory' => $request->state_territory,
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Delivery details created successfully.',
                'data' => $delivery
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to create delivery details', 'details' => $e->getMessage()], 500);
        }
    }
}
