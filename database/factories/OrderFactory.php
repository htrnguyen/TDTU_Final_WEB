<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => 22,
            'order_date' => $this->faker->dateTime(),
            'order_status' => $this->faker->randomElement(['pending', 'shipping', 'shipped', 'completed', 'cancelled']),
            'shipping_address' => $this->faker->address,
            'total_amount' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
