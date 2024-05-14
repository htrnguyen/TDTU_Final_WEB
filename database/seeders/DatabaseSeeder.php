<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            ProductDetailSeeder::class,
            CategorySeeder::class,
            OrderSeeder::class,
            // OrderDetailSeeder::class,
            CouponSeeder::class,
        ]);
    }
}
