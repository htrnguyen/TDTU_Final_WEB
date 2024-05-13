<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'last_name',
        'first_name',
        'username',
        'email',
        'password',
        'address',
        'phone_number',
        'avatar_url',
        'role',
        'status'
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function getProductDetailIds()
    {
        $productDetailIds = [];
        foreach ($this->carts as $index => $item) {
            array_push($productDetailIds, $item->product_detail_id);
        }

        return $productDetailIds;
    }
}
