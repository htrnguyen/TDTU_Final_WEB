<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Create 10 orders
        Order::factory()->count(10)->create()->each(function ($order) {
            // For each order, create random number of order details (between 1 to 5)
            $numDetails = rand(1, 5);
            for ($i = 0; $i < $numDetails; $i++) {
                // Create order detail
                $order->orderDetails()->save(OrderDetail::factory()->make());
            }
        });
    }
}
