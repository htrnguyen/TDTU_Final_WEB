<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'coupon_id';
    protected $fillable = ['coupon_code', 'discount', 'expiration_date'];
    protected $dates = ['create_date', 'expiration_date'];
    public $timestamps = false;
}
