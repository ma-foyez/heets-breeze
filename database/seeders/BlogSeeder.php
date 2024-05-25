<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed some fruit-related blog data
        DB::table('blogs')->insert([
            [
                'title' => 'Benefits of Eating Fresh Fruits Daily',
                'subtitle' => 'Discover the health benefits of consuming fresh fruits daily',
                'description' => 'Learn about the various nutrients and advantages of including fresh fruits in your daily diet.',
                'image' => 'fresh_fruits.jpg',
            ],
            [
                'title' => 'Delicious Fruit Recipes to Try at Home',
                'subtitle' => 'Explore tasty and nutritious fruit-based recipes for your family',
                'description' => 'Get creative with fruits in the kitchen by trying out these easy and delicious fruit recipes.',
                'image' => 'fruit_recipes.jpg',
            ],
            [
                'title' => 'Exotic Fruits from Around the World',
                'subtitle' => 'Discover unique and exotic fruits you may not have heard of',
                'description' => 'Explore a list of intriguing fruits from different parts of the world and learn about their flavors.',
                'image' => 'exotic_fruits.jpg',
            ],
            [
                'title' => 'Seasonal Fruits: A Guide to What\'s in Season',
                'subtitle' => 'Find out which fruits are in season and when to enjoy them',
                'description' => 'Learn about the benefits of consuming seasonal fruits and how to incorporate them into your diet.',
                'image' => 'seasonal_fruits.jpg',
            ],
        ]);
    }
}
