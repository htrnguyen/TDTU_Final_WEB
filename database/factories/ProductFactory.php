<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'category_id' => rand(1, 10), // Assuming you have 10 categories, adjust as needed
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'description' => $this->faker->paragraph,
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'color_id' => rand(1, 10), // Assuming you have 10 product colors, adjust as needed
            'size_id' => rand(1, 10), // Assuming you have 10 product sizes, adjust as needed
        ];
    }
}
