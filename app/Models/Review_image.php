<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_image extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewImageFactory> */
    use HasFactory;

    protected $fillable = [
        'review_id',
        'image_url', 
    ];


    public function Review(){
       return $this->belongsTo(Review::class);
    }



}
