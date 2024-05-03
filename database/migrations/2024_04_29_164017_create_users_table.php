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
            $table->increments('user_id');
            $table->string('last_name', 255);
            $table->string('first_name', 255);
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('address', 255)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('avatar', 255)->nullable()->default(DEFAULT_AVATAR_PATH);
            $table->string('role', 6)->default('user');
            $table->timestamp('created_at')->default(now());
            $table->index('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
