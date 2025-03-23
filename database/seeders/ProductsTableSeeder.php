<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Milk', 'description' => 'Fresh full cream milk', 'price' => 3.50, 'stock' => 100, 'category_id' => 2, 'image' => 'milk.jpg'],
            ['name' => 'Bread', 'description' => 'Whole grain bread', 'price' => 2.00, 'stock' => 50, 'category_id' => 2, 'image' => 'bread.jpg'],
            ['name' => 'Orange Juice', 'description' => '100% pure orange juice', 'price' => 4.00, 'stock' => 80, 'category_id' => 3, 'image' => 'orange_juice.jpg'],
            ['name' => 'Chicken', 'description' => 'Frozen chicken', 'price' => 10.00, 'stock' => 40, 'category_id' => 1, 'image' => 'chicken.jpg'],
            ['name' => 'Rice', 'description' => 'Long grain rice', 'price' => 5.00, 'stock' => 60, 'category_id' => 4, 'image' => 'rice.jpg'],
            ['name' => 'Eggs', 'description' => 'Farm fresh eggs', 'price' => 3.00, 'stock' => 90, 'category_id' => 2, 'image' => 'eggs.jpg'],
            ['name' => 'Butter', 'description' => 'Unsalted butter', 'price' => 4.50, 'stock' => 70, 'category_id' => 2, 'image' => 'butter.jpg'],
            ['name' => 'Tea', 'description' => 'Green tea pack', 'price' => 6.00, 'stock' => 100, 'category_id' => 3, 'image' => 'tea.jpg'],
            ['name' => 'Dog Food', 'description' => 'Premium dog food', 'price' => 15.00, 'stock' => 30, 'category_id' => 5, 'image' => 'dog_food.jpg'],
            ['name' => 'Coffee', 'description' => 'Arabica coffee beans', 'price' => 8.00, 'stock' => 50, 'category_id' => 3, 'image' => 'coffee.jpg']
        ]);
    }
}