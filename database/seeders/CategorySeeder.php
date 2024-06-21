<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['title' => 'Iqos', 'status' => '1', 'order' => '1'],
            ['title' => 'HEETS', 'status' => '1', 'order' => '2'],
        ];

        Category::insert($categories);
    }
}
