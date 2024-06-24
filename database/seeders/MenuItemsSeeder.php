<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuItems = [
            ['naam' => 'Classic Pancake with Butter', 'category_id' => 1, 'price' => 5.99],
            ['naam' => 'Japanese Pancake', 'category_id' => 1, 'price' => 6.99],
            ['naam' => 'Chocolate Pancake', 'category_id' => 1, 'price' => 7.49],
            ['naam' => 'M&M Pancake', 'category_id' => 1, 'price' => 7.99],
            ['naam' => 'Banana Nut Pancake', 'category_id' => 2, 'price' => 8.49],
            ['naam' => 'Blueberry Pancake', 'category_id' => 2, 'price' => 8.99],
            ['naam' => 'Strawberry Pancake', 'category_id' => 2, 'price' => 8.99],
            ['naam' => 'Red Velvet Pancake', 'category_id' => 2, 'price' => 9.49],
            ['naam' => 'Coffee', 'category_id' => 3, 'price' => 2.99],
            ['naam' => 'Tea', 'category_id' => 3, 'price' => 2.49],
            ['naam' => 'Orange Juice', 'category_id' => 3, 'price' => 3.49],
            ['naam' => 'Milkshake', 'category_id' => 3, 'price' => 4.49],
        ];

        foreach ($menuItems as $item) {
            MenuItem::create($item);
        }
    }
}
