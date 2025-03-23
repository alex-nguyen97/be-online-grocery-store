<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1,
                'total_price' => 10.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}