<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name', 100);
            $table->unsignedInteger('category_id');
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
