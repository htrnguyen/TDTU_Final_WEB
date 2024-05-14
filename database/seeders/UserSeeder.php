<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User::truncate();
        User::factory()->count(10)->create();
        User::create([
            'last_name' => 'Luu',
            'first_name' => 'Huu Tri',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'), 
            'address' => 'Tan Dong, Tan Quoi Trung, Vung Liem, Vinh Long',
            'phone_number' => '0779660854',
            'role' => 'admin', 
            'avatar_url' => '/storage/images/users/default_avatar.jpg',
            'status' => 'active',
        ]);
    }
}
