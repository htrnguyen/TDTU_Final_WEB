<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount',
        'title',
        'start_date',
        'expiration_date',
    ];

    public function isActive()
    {
        $now = Carbon::now();
        return $this->start_date <= $now && $now <= $this->expiration_date;
    }
}
