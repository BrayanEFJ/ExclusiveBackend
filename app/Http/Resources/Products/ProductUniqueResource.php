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
            'categories' => $this->categories->map(function ($category) {
                return [
                    'category_id' => $category->id,
                    'category_name' => $category->name
                ];
            }),
            'features' => $this->features->map(function ($feauture) {
                return [
                    'id' => $feauture->id,
                    'name' => $feauture->name,
                    'value' => $feauture->pivot->value
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
