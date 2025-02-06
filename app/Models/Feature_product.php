<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature_product extends Model
{
    /** @use HasFactory<\Database\Factories\FeatureProductFactory> */
    use HasFactory;

    protected $fillable = [
        'product_id',
        'feature_id'
    ];



}
