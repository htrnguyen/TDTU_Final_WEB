<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Category::factory()->count(3)->create();
        Category::create([
            'category_name' => 'men'
        ]);
        Category::create([
            'category_name' => 'women'
        ]);
        Category::create([
            'category_name' => 'kid'
        ]);
    }
}
