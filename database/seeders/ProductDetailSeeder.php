<?php

namespace Database\Seeders;

use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    public function run()
    {
        ProductDetail::factory()->count(50)->create();
    }
}
