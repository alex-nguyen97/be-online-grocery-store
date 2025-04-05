<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::insert([
            // Vegetables (1)
            ['sub_category_name' => 'Leafy Greens', 'category_id' => 1],
            ['sub_category_name' => 'Root Vegetables', 'category_id' => 1],
            ['sub_category_name' => 'Cruciferous', 'category_id' => 1],
            ['sub_category_name' => 'Mushrooms', 'category_id' => 1],

            // Fruits (2)
            ['sub_category_name' => 'Citrus', 'category_id' => 2],
            ['sub_category_name' => 'Berries', 'category_id' => 2],
            ['sub_category_name' => 'Tropical Fruits', 'category_id' => 2],
            ['sub_category_name' => 'Stone Fruits', 'category_id' => 2],

            // Meats (3)
            ['sub_category_name' => 'Beef', 'category_id' => 3],
            ['sub_category_name' => 'Pork', 'category_id' => 3],
            ['sub_category_name' => 'Poultry', 'category_id' => 3],
            ['sub_category_name' => 'Lamb', 'category_id' => 3],

            // Fishes (4)
            ['sub_category_name' => 'Saltwater Fish', 'category_id' => 4],
            ['sub_category_name' => 'Freshwater Fish', 'category_id' => 4],
            ['sub_category_name' => 'Shellfish', 'category_id' => 4],
        ]);
    }
}
