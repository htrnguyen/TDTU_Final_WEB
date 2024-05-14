<?php

define('DEFAULT_AVATAR_PATH', '/storage/images/users/default_avatar.jpg');

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing primary key column named 'id'
            $table->string('last_name');
            $table->string('first_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->enum('role', ['user', 'admin', 'master'])->default('user');
            $table->string('avatar_url')->default(DEFAULT_AVATAR_PATH);
            $table->enum('status', ['unverified', 'active', 'blocked'])->default('unverified');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

