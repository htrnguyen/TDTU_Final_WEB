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
            'coupon_code' => $this->faker->unique()->regexify('[A-Za-z0-9]{10}'),
            'discount' => $this->faker->randomFloat(2, 5, 50),
            'create_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+1 year')
        ];
    }
}
