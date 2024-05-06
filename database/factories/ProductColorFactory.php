<?php

namespace Database\Factories;

use App\Models\ProductColor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductColorFactory extends Factory
{
    protected $model = ProductColor::class;

    public function definition()
    {
        return [
            'color' => $this->faker->colorName,
        ];
    }
}
