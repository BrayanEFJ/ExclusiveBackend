<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\WishlistRepositoryInterface;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use PHPUnit\Runner\DeprecationCollector\Collector;

class WishlistRepository implements WishlistRepositoryInterface
{

    public function getWishlistByUser(?int $userId): Collection
    {
        $wishlist = Wishlist::where('user_id', $userId)
            ->with([
                'product' => function ($query) {
                    $query->select('id', 'name', 'price')
                        ->withCount('reviews') // Cuenta el número de reviews
                        ->withAvg('reviews', 'rating') // Calcula el promedio de rating
                        ->with('mainImage:product_id,image_url'); // Trae solo la imagen principal
                }
            ])
            ->get()
            ->pluck('product');
        return $wishlist;
    }

    public function markAsWishlist(int $userId, int $productId): Wishlist
    {
        $result = Wishlist::create([
            'user_id' => $userId,
            'product_id' => $productId,
        ]);
        return $result;
    }

    public function checkIfProductIsInWishlist(int $userId, int $productId) : bool
    {
         $resultExist = Wishlist::where('user_id', $userId)->where('product_id', $productId)->exists();
         return $resultExist ? true : false;
    }


}
