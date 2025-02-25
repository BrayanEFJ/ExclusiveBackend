<?php

namespace App\Http\Resources\Cart;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartPreviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ([
            'product_id' => $this->product_id,
            'name' => $this->product->name,
            'front_image' => optional($this->product->mainImage)->image_url,
            'quantity' => $this->quantity,
            'price' => $this->product->price,
            'subtotal' => $this->quantity * $this->product->price,
        ]);
    }
}
