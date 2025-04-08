<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            ['category_id' => 1, 'category_name' => 'Vegetables', 'image' => 'vegetables.jpg'],
            ['category_id' => 2, 'category_name' => 'Fruits', 'image' => 'fruits.jpg'],
            ['category_id' => 3, 'category_name' => 'Meats', 'image' => 'meats.jpg'],
            ['category_id' => 4, 'category_name' => 'Fishes', 'image' => 'fish.jpg'],
        ]);
    }
}
