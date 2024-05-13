<?php

namespace Database\Factories;

use App\Models\ProductDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    protected $model = ProductDetail::class;

    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 12),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'color' => 'red',
            'image' => $this->faker->imageUrl(),
            'size' => '38',
        ];
    }
}
