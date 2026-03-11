<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Meals', 'description' => 'Rice meals and heavy meals'],
            ['name' => 'Snacks', 'description' => 'Light snacks and quick bites'],
            ['name' => 'Beverages', 'description' => 'Cold and hot drinks'],
            ['name' => 'Desserts', 'description' => 'Sweet treats and desserts'],
            ['name' => 'Combos', 'description' => 'Meal combos and value packs'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}