<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    protected $fillable = ['last_name', 'first_name', 'username', 'email', 'password', 'address', 'phone', 'avatar', 'role', 'is_active'];
    protected $dates = ['created_at'];
    public $timestamps = false;

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
