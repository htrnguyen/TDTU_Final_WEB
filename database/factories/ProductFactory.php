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
            // 'category_id' => $this->faker->numberBetween(1, 3), 
            'category_id' => 1, 
            'price' => $this->faker->randomFloat(2, 10, 1000), 
            'description' => $this->faker->paragraph, 
            'total_quantity' => $this->faker->numberBetween(0, 100), 
            'color' => 'red,green,blue', 
            'image' => $this->faker->imageUrl(),  
            'size' => '38,39,40,41,42,43,44', 
        ];
    }
}
