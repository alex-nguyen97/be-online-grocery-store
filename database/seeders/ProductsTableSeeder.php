<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'product_id' => 1,
                'name' => 'Product 1',
                'price' => 10.00,
                'stock' => 5,
                'image' => 'default.jpg',
                'sub_category_id' => 1,
            ],
            [
                'product_id' => 2,
                'name' => 'Product 2',
                'price' => 20.00,
                'stock' => 8,
                'image' => 'default.jpg',
                'sub_category_id' => 1,
            ],
            [
                'product_id' => 3,
                'name' => 'Product 3',
                'price' => 30.00,
                'stock' => 2,
                'image' => 'default.jpg',
                'sub_category_id' => 1,
            ],
            [
                'product_id' => 4,
                'name' => 'Product 4',
                'price' => 40.00,
                'stock' => 7,
                'image' => 'default.jpg',
                'sub_category_id' => 2,
            ],
            [
                'product_id' => 5,
                'name' => 'Product 5',
                'price' => 50.00,
                'stock' => 3,
                'image' => 'default.jpg',
                'sub_category_id' => 2,
            ],
            [
                'product_id' => 6,
                'name' => 'Product 6',
                'price' => 60.00,
                'stock' => 9,
                'image' => 'default.jpg',
                'sub_category_id' => 3,
            ],
            [
                'product_id' => 7,
                'name' => 'Product 7',
                'price' => 70.00,
                'stock' => 4,
                'image' => 'default.jpg',
                'sub_category_id' => 3,
            ],
            [
                'product_id' => 8,
                'name' => 'Product 8',
                'price' => 80.00,
                'stock' => 0,
                'image' => 'default.jpg',
                'sub_category_id' => 4,
            ],
        ]);
    }
}
