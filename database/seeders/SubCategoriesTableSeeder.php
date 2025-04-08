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
            ['sub_category_name' => 'Organic Vegetables', 'category_id' => 1],
            ['sub_category_name' => 'Prepacked Vegetables', 'category_id' => 1],
            ['sub_category_name' => 'Lettuce, Kale & Leafy', 'category_id' => 1],
            ['sub_category_name' => 'Broccoli & Cauliflower', 'category_id' => 1],

            // Fruits (2)
            ['sub_category_name' => 'Organic Fruits', 'category_id' => 2],
            ['sub_category_name' => 'Bananas', 'category_id' => 2],
            ['sub_category_name' => 'Berries & Cherries', 'category_id' => 2],
            ['sub_category_name' => 'Citrus Fruits', 'category_id' => 2],

            // Meats (3)
            ['sub_category_name' => 'Beef & Veal', 'category_id' => 3],
            ['sub_category_name' => 'Pork', 'category_id' => 3],
            ['sub_category_name' => 'Mince', 'category_id' => 3],
            ['sub_category_name' => 'Lamb', 'category_id' => 3],

            // Fishes (4)
            ['sub_category_name' => 'Salmon', 'category_id' => 4],
            ['sub_category_name' => 'Prawns', 'category_id' => 4],
            ['sub_category_name' => 'Crabs & Lobster', 'category_id' => 4],
        ]);
    }
}
