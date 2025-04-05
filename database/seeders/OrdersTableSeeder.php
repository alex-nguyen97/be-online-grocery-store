<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        Order::insert([
            [
                'order_id' => 1,
                'user_id' => 1, // Assuming this user exists (e.g., Admin User)
                'total_price' => 170.00, // The total for the products
                'status' => 'Pending', // You can change this as per requirements
            ],
            [
                'order_id' => 2,
                'user_id' => 2, // Another example user
                'total_price' => 110.00, // Total cost of the products
                'status' => 'Shipped',
            ],
        ]);
    }
}
