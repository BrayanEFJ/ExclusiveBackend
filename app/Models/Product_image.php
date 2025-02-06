<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    /** @use HasFactory<\Database\Factories\ProductImageFactory> */
    use HasFactory;


    use HasFactory;

    protected $fillable = ['product_id', 'image_url', 'alt_text'];

    public function product()
    {
        return $this->belongsTo(Product::class, );
    }
}
