<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            [
                'title' =>'Discover the Ultimate Vaping Experience',
                'subtitle' =>'Welcome to Heets Breeze – Where Flavor Meets Innovation',
                'image' => '1.jpg',
                'order' => 1,
            ],
            [
                'title' =>'Elevate Your Vaping Journey',
                'subtitle' =>'Explore Our Premium Selection of Heets for Unmatched Satisfaction',
                'image' => '2.jpg',
                'order' => 2,
            ],
            [
                'title' =>'Embrace the Future of Vaping',
                'subtitle' =>'Transform Your Senses with Heets Breeze – The Next Generation of Vape',
                'image' => '3.jpg',
                'order' => 3,
            ],
            [
                'title' =>'Ignite Your Senses with Heets Breeze',
                'subtitle' =>'Unlock a World of Flavor and Relaxation in Every Inhale',
                'image' => '4.jpg',
                'order' => 4,
            ],
            [
                'title' =>'Welcome to Heets Breeze – Your Vaping Destination',
                'subtitle' =>'Experience the Perfect Blend of Quality, Flavor, and Innovation',
                'image' => '5.jpg',
                'order' => 4,
            ],
        ]);
    }
}
