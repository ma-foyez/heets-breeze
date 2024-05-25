<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'What types of garments do you specialize in?',
                'answer' => 'At HEATS, we specialize in a wide range of garments, including casual wear, formal attire, sportswear, and more.',
                'order' => 1,
            ],
            [
                'question' => 'How can I place an order for your garments?',
                'answer' => 'To place an order for our garments, you can visit our online store and add the desired items to your cart. You can also visit our physical store located at [store address].',
                'order' => 2,
            ],
            [
                'question' => 'What sets your garments apart from others?',
                'answer' => 'At HEATS, our garments are crafted with attention to detail and a focus on quality fabrics. We prioritize comfort, style, and durability in every design we offer.',
                'order' => 3,
            ],
            [
                'question' => 'Do you offer customization options for garments?',
                'answer' => 'Yes, we offer customization options for our garments. You can choose from a variety of colors, sizes, and even request specific alterations to suit your preferences.',
                'order' => 4,
            ],
            [
                'question' => 'Can I return or exchange garments?',
                'answer' => 'Yes, we have a flexible return and exchange policy. If you are not satisfied with your purchase, you can initiate a return or exchange within [number of days] days of receiving your order.',
                'order' => 5,
            ],
        ]);
    }
}
