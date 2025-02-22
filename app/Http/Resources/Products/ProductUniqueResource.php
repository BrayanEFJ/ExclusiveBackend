<?php

namespace App\Http\Resources\Products;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductUniqueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'stock' => $this->stock,
            'price' => $this->price,
            'reviews_count' => $this->reviews_count,
            'reviews_rating' => $this->reviews_avg_rating,
            'is_wishlisted' => (bool) $this->is_wishlisted,
            'category' => $this->category->name,
            'products'=>ProductPreviewResource::collection($this->category->products),
            'features' => $this->features->map(function ($feauture) {
                return [
                    'id' => $feauture->id,
                    'name' => $feauture->name,
                    'value' => $feauture->pivot->value
                ];
            }),
            'reviews'=> $this->reviews->map(function ($review){
                return [
                    'username' => $review->user->name,
                    'rating' => $review->rating,
                    'comment'=>$review->comment,
                    'images'=>$review->images
                ];
            }),
            'images' => $this->images->map(function ($image) {
                return [
                    'image_url' => $image->image_url,
                    'alt_text' => $image->alt_text
                ];
            }),
        ];
    }
}
