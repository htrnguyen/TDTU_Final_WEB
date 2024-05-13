<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'description',
        'total_quantity',
        'color',
        'image',
        'size',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productDetail() {
        return $this->hasMany(ProductDetail::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function getCategoryNameFromId() {
        $category = Category::find($this->category_id);

        return $category ? $category->category_name : 'Uncategorized';
    }

    public function colorFromStringToArray() {
        $colors = $this->color;
        return explode(',', $colors);
    }

    public function sizeFromStringToArray() {
        $sizes = $this->size;
        return explode(',', $sizes);
    }

    public function imageFromStringToArray() {
        $images = $this->image;
        return explode(',', $images);
    }

    public function getNumberOfColors() {
        $count = count($this->colorFromStringToArray());

        return $count > 1 ? $count . ' colors' : $count . ' color';
    }

    // public function sizes()
    // {
    //     return $this->hasMany(ProductSize::class);
    // }

    // public function colors()
    // {
    //     return $this->belongsToMany(ProductColor::class);
    // }

    // public function images()
    // {
    //     return $this->hasMany(ProductImage::class);
    // }
}
