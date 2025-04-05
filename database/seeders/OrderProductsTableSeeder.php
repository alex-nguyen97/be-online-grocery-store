<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\OrderProduct;

class OrderProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        OrderProduct::insert([
            // Order 1 - Products
            [
                'order_product_id' => 1,
                'order_id' => 1,
                'product_id' => 1, // Product 1
                'quantity' => 2,    // Ordered 2 of Product 1
                'unit_price' => 10.00,
            ],
            [
                'order_product_id' => 2,
                'order_id' => 1,
                'product_id' => 2, // Product 2
                'quantity' => 1,    // Ordered 1 of Product 2
                'unit_price' => 20.00,
            ],

            // Order 2 - Products
            [
                'order_product_id' => 3,
                'order_id' => 2,
                'product_id' => 3, // Product 3
                'quantity' => 1,    // Ordered 1 of Product 3
                'unit_price' => 30.00,
            ],
            [
                'order_product_id' => 4,
                'order_id' => 2,
                'product_id' => 4, // Product 4
                'quantity' => 1,    // Ordered 1 of Product 4
                'unit_price' => 40.00,
            ],
        ]);
    }
}
