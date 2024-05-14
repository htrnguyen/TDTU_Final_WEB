<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->dateTime('order_date')->default(now());
            $table->enum('order_status', ['pending', 'shipping', 'shipped', 'completed', 'cancelled'])->default('pending');
            $table->string('shipping_address');
            $table->decimal('total_amount', 10, 2);
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
