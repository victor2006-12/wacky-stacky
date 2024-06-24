<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Breakfast Pancakes']);
        Category::create(['name' => 'Specialty Pancakes']);
        Category::create(['name' => 'Beverages']);
    }
}
