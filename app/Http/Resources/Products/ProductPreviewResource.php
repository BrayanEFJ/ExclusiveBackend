<?php

namespace App\Http\Resources\Products;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductPreviewResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'reviews_count' => $this->reviews_count,
            'reviews_rating' => $this->reviews_avg_rating,
            'is_wishlisted' => (bool) $this->is_wishlisted,
            'front_image' => optional($this->mainImage)->image_url,
        ];  

    }
}
