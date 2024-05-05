<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Default password is 'password'. You may use Hash::make() for Laravel 8
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'role' => 'user', // Default role is 'user'
            'avatar_url' => '/storage/images/users/default_avatar.jpg',
            'is_active' => true,
        ];
    }
}
