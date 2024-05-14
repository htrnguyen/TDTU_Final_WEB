<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductDetail;
use App\Models\Product;

class ProductDetailSeeder extends Seeder
{
    public function run()
    {
        $productIds = Product::pluck('id')->toArray();

        foreach ($productIds as $productId) {
            $n = rand(20, 50);
            for ($i = 0; $i < $n; $i++) {
                ProductDetail::create([
                    'product_id' => $productId,
                    'stock_quantity' => rand(50, 200),
                    'color' => ['White', 'Black', 'Blue', 'Red', 'Green'][rand(0, 4)],
                    'image' => 'product_image_' . $productId . '.jpg',
                    'size' => rand(35, 45),
                ]);
            }
        }
    }
}
