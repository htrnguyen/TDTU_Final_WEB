<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    protected $model = Coupon::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'discount' => $this->faker->randomElement([10, 20, 30, 40, 50]),
            'title' => $this->faker->word,
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+1 year')
        ];
    }
}
