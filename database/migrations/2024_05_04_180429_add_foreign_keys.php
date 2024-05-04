<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    public function up()
    {
        // Schema::table('product_images', function (Blueprint $table) {
        //     $table->foreign('product_id')->references('id')->on('products');
        // });

        // Schema::table('products', function (Blueprint $table) {
        //     $table->foreign('category_id')->references('id')->on('categories');
        //     $table->foreign('color_id')->references('id')->on('product_colors');
        //     $table->foreign('size_id')->references('id')->on('product_sizes');
        // });

        // Schema::table('carts', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('product_id')->references('id')->on('products');
        // });

        // Schema::table('orders', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        // });

        // Schema::table('order_details', function (Blueprint $table) {
        //     $table->foreign('order_id')->references('id')->on('orders');
        //     $table->foreign('product_id')->references('id')->on('products');
        // });
    }

    public function down()
    {
        // Schema::table('product_images', function (Blueprint $table) {
        //     $table->dropForeign(['product_id']);
        // });

        // Schema::table('products', function (Blueprint $table) {
        //     $table->dropForeign(['category_id']);
        //     $table->dropForeign(['color_id']);
        //     $table->dropForeign(['size_id']);
        // });

        // Schema::table('carts', function (Blueprint $table) {
        //     $table->dropForeign(['user_id']);
        //     $table->dropForeign(['product_id']);
        // });

        // Schema::table('orders', function (Blueprint $table) {
        //     $table->dropForeign(['user_id']);
        // });

        // Schema::table('order_details', function (Blueprint $table) {
        //     $table->dropForeign(['order_id']);
        //     $table->dropForeign(['product_id']);
        // });
    }
}
