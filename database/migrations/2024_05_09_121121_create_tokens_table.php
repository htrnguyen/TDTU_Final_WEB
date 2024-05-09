<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('token')->unique();
            $table->timestamp('expires_at')->default(now()->addMinutes(5));
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tokens');
    }
}
