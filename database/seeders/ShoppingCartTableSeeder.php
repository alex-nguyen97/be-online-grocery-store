<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppingCartTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('shopping_cart')->insert([
            [
                'user_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}