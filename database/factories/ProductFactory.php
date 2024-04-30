<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'product_name' => $this->faker->unique()->word,
            'category_id' => Category::factory(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'description' => $this->faker->sentence
        ];
    }
}
