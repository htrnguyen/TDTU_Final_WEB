<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'stock_quantity',
        'color',
        'image',
        'size',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function getFullInformation()
    {
        $product = $this->product;

        $product->color = $this->color;
        $product->size = $this->size;
        $product->image = $product->image;
        $product->product_detail_id = $this->id;

        return $product;
    }

}
