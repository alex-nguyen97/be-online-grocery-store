<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryDetail;

class DeliveryDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryDetail::create([
            'order_id' => 1,
            'recipient_name' => 'John Doe',
            'address_street' => '456 Customer Ln',
            'city_suburb' => 'Sydney',
            'state_territory' => 'NSW',
            'mobile_number' => '0400000000',
            'email' => 'john@example.com',
        ]);
    }
}
