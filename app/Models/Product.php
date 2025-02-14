<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'stock', 'category_id'];

    // En Product.php
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function images()
    {
        return $this->hasMany(Product_image::class)
            ->orderByDesc('is_main') // Las imágenes con is_main = true estarán primero
            ->orderBy('id');
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_products')->withPivot('value');
    }

    public function mainImage()
    {
        return $this->hasOne(Product_image::class)->where('is_main', true);
    }




}
