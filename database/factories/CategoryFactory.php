<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $words = ['men', 'women', 'kid'];
        return [
            'category_name' => $this->faker->randomElement($words)
        ];
    }
}
