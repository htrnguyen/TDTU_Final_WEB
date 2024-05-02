<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    protected $fillable = ['last_name', 'first_name', 'username', 'email', 'password', 'address', 'phone', 'avatar'];
    protected $dates = ['created_at'];
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
}
