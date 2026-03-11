<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['category_id' => 1, 'name' => 'Chicken Adobo', 'description' => 'Classic Filipino chicken adobo', 'price' => 80, 'stock' => 50, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 1, 'name' => 'Pork Sisig', 'description' => 'Sizzling pork sisig', 'price' => 95, 'stock' => 40, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 1, 'name' => 'Beef Tapa', 'description' => 'Sweet beef tapa with rice', 'price' => 90, 'stock' => 35, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 1, 'name' => 'Fried Chicken', 'description' => 'Crispy fried chicken meal', 'price' => 85, 'stock' => 45, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 1, 'name' => 'Pork Chop', 'description' => 'Fried pork chop with rice', 'price' => 88, 'stock' => 30, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 1, 'name' => 'Bicol Express', 'description' => 'Spicy pork in coconut milk', 'price' => 92, 'stock' => 25, 'is_available' => true, 'low_stock_threshold' => 10],

            ['category_id' => 2, 'name' => 'Burger', 'description' => 'Classic burger', 'price' => 60, 'stock' => 60, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 2, 'name' => 'Fries', 'description' => 'Crispy french fries', 'price' => 45, 'stock' => 70, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 2, 'name' => 'Hotdog Sandwich', 'description' => 'Hotdog in bun', 'price' => 50, 'stock' => 50, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 2, 'name' => 'Siopao', 'description' => 'Steamed pork bun', 'price' => 35, 'stock' => 40, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 2, 'name' => 'Pancit Canton', 'description' => 'Stir-fried noodles', 'price' => 55, 'stock' => 45, 'is_available' => true, 'low_stock_threshold' => 10],
            ['category_id' => 2, 'name' => 'Cheese Sticks', 'description' => 'Fried cheese sticks', 'price' => 40, 'stock' => 35, 'is_available' => true, 'low_stock_threshold' => 10],

            ['category_id' => 3, 'name' => 'Coke', 'description' => 'Chilled soft drink', 'price' => 25, 'stock' => 100, 'is_available' => true, 'low_stock_threshold' => 15],
            ['category_id' => 3, 'name' => 'Sprite', 'description' => 'Lemon-lime soda', 'price' => 25, 'stock' => 90, 'is_available' => true, 'low_stock_threshold' => 15],
            ['category_id' => 3, 'name' => 'Iced Tea', 'description' => 'Refreshing iced tea', 'price' => 30, 'stock' => 80, 'is_available' => true, 'low_stock_threshold' => 15],
            ['category_id' => 3, 'name' => 'Coffee', 'description' => 'Hot brewed coffee', 'price' => 20, 'stock' => 70, 'is_available' => true, 'low_stock_threshold' => 15],
            ['category_id' => 3, 'name' => 'Bottled Water', 'description' => 'Mineral water', 'price' => 20, 'stock' => 120, 'is_available' => true, 'low_stock_threshold' => 15],
            ['category_id' => 3, 'name' => 'Orange Juice', 'description' => 'Cold orange juice', 'price' => 35, 'stock' => 60, 'is_available' => true, 'low_stock_threshold' => 15],

            ['category_id' => 4, 'name' => 'Leche Flan', 'description' => 'Creamy caramel custard', 'price' => 40, 'stock' => 25, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 4, 'name' => 'Halo-Halo', 'description' => 'Mixed shaved ice dessert', 'price' => 65, 'stock' => 20, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 4, 'name' => 'Ice Cream Cup', 'description' => 'Vanilla ice cream cup', 'price' => 35, 'stock' => 30, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 4, 'name' => 'Brownie', 'description' => 'Chocolate brownie slice', 'price' => 30, 'stock' => 25, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 4, 'name' => 'Banana Cue', 'description' => 'Caramelized banana snack', 'price' => 25, 'stock' => 30, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 4, 'name' => 'Turon', 'description' => 'Banana lumpia', 'price' => 20, 'stock' => 35, 'is_available' => true, 'low_stock_threshold' => 5],

            ['category_id' => 5, 'name' => 'Burger Combo', 'description' => 'Burger, fries, and drink', 'price' => 120, 'stock' => 20, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 5, 'name' => 'Chicken Combo', 'description' => 'Chicken meal with drink', 'price' => 130, 'stock' => 18, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 5, 'name' => 'Snack Combo', 'description' => 'Hotdog sandwich with drink', 'price' => 85, 'stock' => 22, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 5, 'name' => 'Dessert Combo', 'description' => 'Brownie and coffee', 'price' => 45, 'stock' => 15, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 5, 'name' => 'Rice Meal Combo', 'description' => 'Meal, dessert, and drink', 'price' => 150, 'stock' => 12, 'is_available' => true, 'low_stock_threshold' => 5],
            ['category_id' => 5, 'name' => 'Student Saver', 'description' => 'Budget meal combo', 'price' => 99, 'stock' => 25, 'is_available' => true, 'low_stock_threshold' => 5],
        ];

        foreach ($items as $item) {
            MenuItem::create($item);
        }
    }
}