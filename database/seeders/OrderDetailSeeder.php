<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    public function run()
    {
        // Create order details for existing orders
        $orders = \App\Models\Order::all();
        
        // Loop through each order
        foreach ($orders as $order) {
            // Generate a random number of order details (between 1 and 5)
            $numOrderDetails = rand(1, 5);
            
            // Create order details for the current order
            for ($i = 0; $i < $numOrderDetails; $i++) {
                OrderDetail::factory()->create([
                    'order_id' => $order->id,
                ]);
            }
        }
    }
}
