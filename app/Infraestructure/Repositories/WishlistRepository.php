<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\WishlistRepositoryInterface;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class WishlistRepository implements WishlistRepositoryInterface{

    public function getWishlistByUser(?int $userId): Collection {
        $wishlist = Wishlist::with('user', 'product')
        ->where('user_id','=', $userId)
        ->get();
        return $wishlist;
    }

}