<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\CartRepositoryInterface;
use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class CartRepository implements CartRepositoryInterface
{
    public function findUniqueCartByUserId(?int $userId) : Collection {
        $response = Cart::select('product_id','quantity')
        ->with([
            'product' => function ($query) use ($userId) {
                $query->select(['id', 'name', 'price', 'category_id'])
                    ->with('mainImage:product_id,image_url');
            }
        ])
        ->where('user_id', $userId)
        ->get();
        return $response;
    }
}   