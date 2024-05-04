<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['last_name', 'first_name', 'username', 'email', 'password', 'address', 'phone_number', 'avatar_url', 'role', 'is_active'];
    protected $dates = ['created_at', 'updated_at'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function casts(): array {
        return [
            'password' => 'hashed'
        ];
    }
}
