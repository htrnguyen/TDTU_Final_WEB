<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    protected $model = ProductImage::class;

    public function definition()
    {
        return [
            'product_id' => rand(1, 100), // Assuming you have 100 products, adjust as needed
            'image_path' => $this->faker->imageUrl(),
            'is_main_image' => $this->faker->boolean(),
        ];
    }
}
