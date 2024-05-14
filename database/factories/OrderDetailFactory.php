<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    protected $model = OrderDetail::class;

    public function definition()
    {
        return [
            'order_id' => 1,
            'product_id' => function () {
                return \App\Models\Product::factory()->create()->id;
            },
            'quantity' => $this->faker->numberBetween(1, 10),
            'unit_price' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
