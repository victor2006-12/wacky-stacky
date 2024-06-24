<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\MenuItem;
use App\Models\Category;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        $breakfastPancakes = Category::where('name', 'Breakfast Pancakes')->first()->id;
        $specialtyPancakes = Category::where('name', 'Specialty Pancakes')->first()->id;
        $beverages = Category::where('name', 'Beverages')->first()->id;

        MenuItem::create(['name' => 'Classic Pancake with Butter', 'price' => 5.99, 'category_id' => $breakfastPancakes]);
        MenuItem::create(['name' => 'Japanese Pancake', 'price' => 6.99, 'category_id' => $breakfastPancakes]);
        MenuItem::create(['name' => 'Chocolate Pancake', 'price' => 7.49, 'category_id' => $breakfastPancakes]);
        MenuItem::create(['name' => 'M&M Pancake', 'price' => 7.99, 'category_id' => $breakfastPancakes]);
        // Voeg meer items toe...
    }
}
