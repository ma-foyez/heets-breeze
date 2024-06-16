<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'title' => 'Iqoo HeatStick Bronze',
                'description' => 'Experience the smooth and rich flavor of Iqoo HeatStick Bronze. Designed for a superior vaping experience.',
                'image' => '1.jpg',
                'product_category' => 1, 
                'regular_price' => 350, 
                'offer_price' => 300, 
                'order' => 1,
            ],
            [
                'title' => 'Iqoo HeatStick Silver',
                'description' => 'Enjoy the crisp and clean taste of Iqoo HeatStick Silver. Perfect for a refreshing vaping session.',
                'image' => '2.jpg',
                'product_category' => 1,
                'regular_price' => 350, 
                'offer_price' => 300, 
                'order' => 2,
            ],
            [
                'title' => 'HEATS Classic Tobacco',
                'description' => 'Indulge in the classic tobacco flavor with HEATS Classic. A timeless choice for tobacco enthusiasts.',
                'image' => '3.jpg',
                'product_category' => 2, 
                'regular_price' => 350, 
                'offer_price' => 300, 
                'order' => 1,
            ],
            [
                'title' => 'HEATS Menthol Breeze',
                'description' => 'Feel the cool menthol sensation with HEATS Menthol Breeze. Ideal for a refreshing and invigorating vape.',
                'image' => '4.jpg',
                'product_category' => 2,
                'regular_price' => 350, 
                'offer_price' => 300, 
                'order' => 2,
            ],
        ];

        // Insert the products into the database
        Product::insert($products);
    }
}
