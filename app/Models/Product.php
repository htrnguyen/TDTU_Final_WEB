<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function getCategoryNameFromId()
    {
        $category = Category::find($this->category_id);

        return $category ? $category->category_name : 'Uncategorized';
    }

    public function getAllColors()
    {
        $pd = ProductDetail::where('product_id', $this->id)->get();

        $colors = [];

        foreach ($pd as $index => $p) {
            if (!in_array($p->color, $colors)) {
                array_push($colors, $p->color);
            }
        }

        return Arr::sort($colors);
    }

    public function getAllSizes()
    {
        $pd = ProductDetail::where('product_id', $this->id)->get();

        $sizes = [];

        foreach ($pd as $index => $p) {
            if (!in_array($p->size, $sizes)) {
                echo $p->size;
                array_push($sizes, $p->size);
            }
        }


        return Arr::sort($sizes);
    }

    public function imageFromStringToArray()
    {
        $images = $this->image;
        return explode(',', $images);
    }

    public function getNumberOfColors()
    {
        $count = count($this->getAllColors());

        return $count > 1 ? $count . ' colors' : $count . ' color';
    }
}
