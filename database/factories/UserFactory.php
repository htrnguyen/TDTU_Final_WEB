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
            'password' => 'password', // You can generate hashed passwords here
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'avatar' => '/storage/images/users/default_avatar.jpg',
            'created_at' => now(),
        ];
    }
}
