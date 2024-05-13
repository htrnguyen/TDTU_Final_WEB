<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexes extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->index('email');
            $table->index('username');
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->index('category_name');
        });

        // Schema::table('product_colors', function (Blueprint $table) {
        //     $table->index('color');
        // });

        // Schema::table('product_sizes', function (Blueprint $table) {
        //     $table->index('size');
        // });

        // Schema::table('product_images', function (Blueprint $table) {
        //     $table->index('product_id');
        // });

        Schema::table('products', function (Blueprint $table) {
            $table->index('category_id');
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('product_id');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->index(['user_id', 'order_date']);
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->index('order_id');
            $table->index('product_id');
        });

        Schema::table('coupons', function (Blueprint $table) {
            $table->index('code');
        });
    }

    public function down()
    {
        // In the down method, we don't need to explicitly drop the indexes
        // as they will be dropped automatically when rolling back migrations.
    }
}
