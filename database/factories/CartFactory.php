<?php

namespace Database\Factories;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition()
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'product_id' => function () {
                return \App\Models\Product::factory()->create()->id;
            },
            'product_detail_id' => function () {
                return \App\Models\ProductDetail::factory()->create()->id;
            },
            'quantity' => $this->faker->numberBetween(1, 10),
            // Add other fields as needed
        ];
    }
}
