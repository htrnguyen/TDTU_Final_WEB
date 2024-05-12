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
        'stock_quantity',
        'color',
        'image',
        'size',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameFromId() {
        $category = Category::find($this->category_id);

        return $category ? $category->category_name : 'Uncategorized';
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
