<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductColorsTable extends Migration
{
    public function up()
    {
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing primary key column named 'id'
            $table->string('color');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('product_colors');
    }
}
