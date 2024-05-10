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
            'name' => $this->faker->words(3, true), 
            'category_id' => $this->faker->numberBetween(1, 3), 
            'price' => $this->faker->randomFloat(2, 10, 1000), 
            'description' => $this->faker->paragraph, 
            'stock_quantity' => $this->faker->numberBetween(0, 100), 
            'color' => $this->faker->safeColorName, 
            'image' => $this->faker->imageUrl(),  
            'size' => '38,39,40,41,42,43,44', 
        ];
    }
}
