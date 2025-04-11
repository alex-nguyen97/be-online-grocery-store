<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Champagne Leg Ham Shaved From The Deli Per Kg',
                'price' => 21.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/129693.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => 'Woolworths Heart Smart Extra Lean Beef Mince 500g',
                'price' => 10.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/577860.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 11
            ],
            [
                'name' => 'Woolworths Beef Mince 1kg',
                'price' => 11.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/577864.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 11
            ],
            [
                'name' => 'Woolworths Lean Beef Mince 1kg',
                'price' => 15.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/577862.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 11
            ],
            [
                'name' => 'From the Deli Middle Bacon Rashers From The Deli Per Kg',
                'price' => 19.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/714680.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => 'Woolworths Lean Beef Mince 500g',
                'price' => 9.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/577861.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 11
            ],
            [
                'name' => 'Woolworths Beef Mince 500g',
                'price' => 6.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/577863.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 11
            ],
            [
                'name' => 'Woolworths 10 Beef Sausages 550g',
                'price' => 5.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/901649.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 9
            ],
            [
                'name' => "D'Orsogna Ham Leg Triple Smoked 97% Fat Free Shaved 1kg",
                'price' => 24.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/175734.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => "D'Orsogna Shortcut Bacon Per Kg",
                'price' => 15.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/71841.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => 'Market Value 26 Thin BBQ Sausages 1.8kg',
                'price' => 11.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/901719.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 9
            ],
            [
                'name' => "D'Orsogna Plain Streaky Bacon From The Deli Per Kg",
                'price' => 23.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/746376.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => 'Deli Leg Ham Shaved From The Deli Per Kg',
                'price' => 19.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/130276.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => 'Woolworths Pork & Beef Mince 500g',
                'price' => 6.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/239598.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 11
            ],
            [
                'name' => 'Woolworths Lean Pork Mince 500g',
                'price' => 6.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/582608.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 11
            ],
            [
                'name' => 'Woolworths Beef Stir Fry 500g',
                'price' => 11.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/531015.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 9
            ],
            [
                'name' => 'Woolworths Beef Scotch Fillet Steak 170g',
                'price' => 8.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/317293.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 9
            ],
            [
                'name' => 'Woolworths Shortcut Bacon 1kg',
                'price' => 13.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/55375.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => "D'Orsogna Honey Ham Shaved From The Deli Per kg",
                'price' => 26.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/103449.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 10
            ],
            [
                'name' => "Moira Mac's Oven Roasted Chicken Breast Shredded From The Deli Per Kg",
                'price' => 29.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/785788.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 12
            ],
            [
                'name' => 'Don Cocktail Frankfurts From The Deli Per Kg',
                'price' => 7.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/741794.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 9
            ],
            [
                'name' => 'Woolworths Beef Chuck Steak Medium 350G - 800G',
                'price' => 14.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/675632.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 9
            ],
            [
                'name' => "Ingham's Oven Roasted Turkey Breast Shaved From The Deli Per Kg",
                'price' => 27.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/27316.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 12
            ],
            [
                'name' => 'Woolworths Beef Rump Steak 250g',
                'price' => 8.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/236846.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 9
            ],
            [
                'name' => 'Fresh Tomato Each',
                'price' => 0.87,
                'image' => 'https://assets.woolworths.com.au/images/1005/134034.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 4,
                'description' => null,
                'sub_category_id' => 1 // Organic Vegetables
            ],
            [
                'name' => 'Avocado Shepard Each',
                'price' => 2.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/186910.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 1,
                'description' => null,
                'sub_category_id' => 1 // Organic Vegetables
            ],
            [
                'name' => 'Potato White Washed Each',
                'price' => 0.85,
                'image' => 'https://assets.woolworths.com.au/images/1005/208895.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 2,
                'description' => null,
                'sub_category_id' => 2 // Prepacked Vegetables
            ],
            [
                'name' => 'Onion Brown Each',
                'price' => 0.59,
                'image' => 'https://assets.woolworths.com.au/images/1005/144329.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 0,
                'description' => null,
                'sub_category_id' => 2 // Prepacked Vegetables
            ],
            [
                'name' => 'Lebanese Cucumbers Each',
                'price' => 1.42,
                'image' => 'https://assets.woolworths.com.au/images/1005/137130.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 3 // Lettuce, Kale & Leafy
            ],
            [
                'name' => 'Red Capsicum Each',
                'price' => 2.23,
                'image' => 'https://assets.woolworths.com.au/images/1005/135306.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 3 // Lettuce, Kale & Leafy
            ],
            [
                'name' => 'Fresh Broccoli Each',
                'price' => 1.49,
                'image' => 'https://assets.woolworths.com.au/images/1005/134681.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 4 // Broccoli & Cauliflower
            ],
            [
                'name' => 'Carrot Fresh Each',
                'price' => 0.35,
                'image' => 'https://assets.woolworths.com.au/images/1005/135344.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 4 // Broccoli & Cauliflower
            ],
            [
                'name' => 'Sweet Potato Gold Each',
                'price' => 1.96,
                'image' => 'https://assets.woolworths.com.au/images/1005/147071.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 1 // Organic Vegetables
            ],
            [
                'name' => 'Green Zucchini Each',
                'price' => 1.18,
                'image' => 'https://assets.woolworths.com.au/images/1005/170225.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 3 // Lettuce, Kale & Leafy
            ],
            [
                'name' => 'Truss Tomatoes Each',
                'price' => 1.11,
                'image' => 'https://assets.woolworths.com.au/images/1005/169438.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 1 // Organic Vegetables
            ],
            [
                'name' => 'Onion Red Each',
                'price' => 0.86,
                'image' => 'https://assets.woolworths.com.au/images/1005/144497.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 2 // Prepacked Vegetables
            ],
            [
                'name' => 'Woolworths Cherry Tomatoes Punnet 250g',
                'price' => 3.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/149620.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 1 // Organic Vegetables
            ],
            [
                'name' => 'Woolworths Continental Cucumbers Each',
                'price' => 2.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/137102.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 3 // Lettuce, Kale & Leafy
            ],
            [
                'name' => 'Iceberg Lettuce Each',
                'price' => 4.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/154340.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 3 // Lettuce, Kale & Leafy
            ],
            [
                'name' => 'Woolworths Australian Grown Carrots 1Kg',
                'price' => 1.70,
                'image' => 'https://assets.woolworths.com.au/images/1005/135369.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 4 // Broccoli & Cauliflower
            ],
            [
                'name' => 'Woolworths Qukes Baby Cucumbers Punnet 250g',
                'price' => 3.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/169067.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 3 // Lettuce, Kale & Leafy
            ],
            [
                'name' => 'Cooke Seafood Spanish Sea Bass 220g',
                'price' => 16.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/119310.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Salmon Tasmanian Atlantic Fillets Skinned & Boned Per Kg',
                'price' => 40.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/126497.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Woolworths Salmon Portions Skin On 4 Pack',
                'price' => 16.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/157054.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Woolworths Prawns Uncooked Tiger Large Thawed Per Kg',
                'price' => 19.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/786404.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Woolworths Salmon Tasmanian Atlantic Fillets Skin On Per Kg',
                'price' => 44.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/95171.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Woolworths Green Banana Prawns Large Thawed Per Kg',
                'price' => 20.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/96995.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Woolworths Thawed Large Cooked Tiger Prawns Per Kg',
                'price' => 24.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/65031.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Woolworths Salmon Portions Skin Off 4 Pack',
                'price' => 18.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/157055.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Thawed Marinara Mix Per Kg',
                'price' => 17.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/593307.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Woolworths Freshwater Basa Fillets Thawed Per Kg',
                'price' => 11.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/87465.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Woolworths Fresh Skin On Barramundi Fillets Per Kg',
                'price' => 36.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/844680.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 15
            ],
            [
                'name' => 'Woolworths Barramundi Thawed Fillets Per Kg',
                'price' => 18.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/71587.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Ocean Blue Smoked Salmon 300g',
                'price' => 19.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/365407.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Woolworths Wood Smoked & Sliced Smoked Salmon Natural 100g',
                'price' => 6.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/274957.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13
            ],
            [
                'name' => 'Woolworths Frozen Salmon Fillets Skin On 250g',
                'price' => 9.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/259832.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13
            ],
            [
                'name' => 'Woolworths Frozen Basa Fillets 1kg',
                'price' => 8.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/445352.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 15
            ],
            [
                'name' => 'Just Caught Raw Prawn Meat 300g',
                'price' => 10.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/62050.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Just Caught Peeled & Deveined Raw Prawns 1kg',
                'price' => 27.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/666563.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Ocean Blue Smoked Salmon 100g',
                'price' => 9.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/345350.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Woolworths Smoked Fillets Cod Per Kg',
                'price' => 18.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/48888.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 15 // Crabs & Lobster
            ],
            [
                'name' => 'Woolworths Salmon Portions Skin Off 2 Pack',
                'price' => 16.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/157053.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Tassal Atlantic Salmon Skin On 300g',
                'price' => 18.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/630332.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Ocean Blue Smoked Salmon Sliced 50g',
                'price' => 5.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/345345.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 13 // Salmon
            ],
            [
                'name' => 'Just Caught Garlic Prawns 500g',
                'price' => 12.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/62458.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Humpty Doo Barramundi Skin On 260g',
                'price' => 13.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/880239.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 10,
                'description' => null,
                'sub_category_id' => 14 // Crabs & Lobster
            ],
            [
                'name' => 'Cavendish Bananas Each',
                'price' => 0.86,
                'image' => 'https://assets.woolworths.com.au/images/1005/133211.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 100,
                'description' => null,
                'sub_category_id' => 6 // Bananas
            ],
            [
                'name' => 'Avocado Shepard Each',
                'price' => 2.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/186910.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 50,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Fresh Pink Lady Apples Each',
                'price' => 1.03,
                'image' => 'https://assets.woolworths.com.au/images/1005/105919.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 150,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Apple Royal Gala Each',
                'price' => 0.88,
                'image' => 'https://assets.woolworths.com.au/images/1005/155003.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 120,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Strawberries 250g Punnet',
                'price' => 4.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/144607.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 200,
                'description' => null,
                'sub_category_id' => 7 // Berries & Cherries
            ],
            [
                'name' => 'Eat Later Cavendish Bananas Each',
                'price' => 0.86,
                'image' => 'https://assets.woolworths.com.au/images/1005/157649.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 80,
                'description' => null,
                'sub_category_id' => 6 // Bananas
            ],
            [
                'name' => 'Fresh Granny Smith Apples Each',
                'price' => 0.79,
                'image' => 'https://assets.woolworths.com.au/images/1005/130935.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 130,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'White Seedless Grapes Bag Approx. 900g each',
                'price' => 3.60,
                'image' => 'https://assets.woolworths.com.au/images/1005/138801.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 90,
                'description' => null,
                'sub_category_id' => 7 // Berries & Cherries
            ],
            [
                'name' => 'Plum Black Each',
                'price' => 0.39,
                'image' => 'https://assets.woolworths.com.au/images/1005/139894.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 200,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Orange Navel Each',
                'price' => 2.14,
                'image' => 'https://assets.woolworths.com.au/images/1005/149885.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 180,
                'description' => null,
                'sub_category_id' => 8 // Citrus Fruits
            ],
            [
                'name' => 'Blueberries Punnet 125g',
                'price' => 6.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/169792.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 150,
                'description' => null,
                'sub_category_id' => 7 // Berries & Cherries
            ],
            [
                'name' => 'Lemon Fresh Each',
                'price' => 1.38,
                'image' => 'https://assets.woolworths.com.au/images/1005/259514.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 220,
                'description' => null,
                'sub_category_id' => 8 // Citrus Fruits
            ],
            [
                'name' => 'Fresh William Bartlett Pear Each',
                'price' => 0.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/145762.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 100,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Raspberries Punnet 125g',
                'price' => 4.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/165262.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 180,
                'description' => null,
                'sub_category_id' => 7 // Berries & Cherries
            ],
            [
                'name' => 'Kiwi Fruit Green Each',
                'price' => 0.95,
                'image' => 'https://assets.woolworths.com.au/images/1005/139238.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 250,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Woolworths Red Watermelon Cut Quarter Each',
                'price' => 7.70,
                'image' => 'https://assets.woolworths.com.au/images/1005/120384.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 50,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Lime Fresh Each',
                'price' => 1.25,
                'image' => 'https://assets.woolworths.com.au/images/1005/245902.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 180,
                'description' => null,
                'sub_category_id' => 8 // Citrus Fruits
            ],
            [
                'name' => 'Woolworths Fresh Pink Lady Apples Punnet 1kg',
                'price' => 5.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/310968.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 120,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Plum Red Each',
                'price' => 0.39,
                'image' => 'https://assets.woolworths.com.au/images/1005/282861.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 200,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Bananas Kids 5 Pack',
                'price' => 3.00,
                'image' => 'https://assets.woolworths.com.au/images/1005/106218.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 150,
                'description' => null,
                'sub_category_id' => 6 // Bananas
            ],
            [
                'name' => 'Orange Valencia Each',
                'price' => 0.59,
                'image' => 'https://assets.woolworths.com.au/images/1005/144708.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 200,
                'description' => null,
                'sub_category_id' => 8 // Citrus Fruits
            ],
            [
                'name' => 'Avocado Fresh 5 Pack',
                'price' => 6.90,
                'image' => 'https://assets.woolworths.com.au/images/1005/594774.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 60,
                'description' => null,
                'sub_category_id' => 5 // Organic Fruits
            ],
            [
                'name' => 'Red Seedless Grapes Bag Approx. 900g each',
                'price' => 4.50,
                'image' => 'https://assets.woolworths.com.au/images/1005/405838.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 100,
                'description' => null,
                'sub_category_id' => 7 // Berries & Cherries
            ],
            [
                'name' => 'Macro Organic Banana Each',
                'price' => 1.17,
                'image' => 'https://assets.woolworths.com.au/images/1005/306510.jpg?impolicy=wowsmkqiema&w=260&h=260',
                'stock' => 80,
                'description' => null,
                'sub_category_id' => 6 // Bananas
            ]
        ]);
    }
}
