<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductPreviewResource extends JsonResource
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
            'price' => $this->price,
            'reviews_count' => $this->reviews_count,
            'reviews_rating' => $this->reviews_avg_rating,
            'is_wishlisted' => (bool) $this->is_wishlisted,
            'images' => $this->images->map(fn ($image) => [
                'id' => $image->id,
                'url' => $image->image_url,
            ]),
        ];  

    }
}
