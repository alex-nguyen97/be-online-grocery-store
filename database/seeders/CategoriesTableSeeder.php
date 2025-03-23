<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Frozen'],
            ['name' => 'Fresh'],
            ['name' => 'Beverages'],
            ['name' => 'Home'],
            ['name' => 'Pet-food']
        ]);
    }
}