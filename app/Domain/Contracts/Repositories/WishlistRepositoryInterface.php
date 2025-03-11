<?php

namespace App\Domain\Contracts\Repositories;

use App\Models\Wishlist;
use Illuminate\Support\Collection;

interface WishlistRepositoryInterface{

    public function getWishlistByUser(?int $userId) : Collection;

    public function markAsWishlist(int $userId, int $productId) : Wishlist;

    public function checkIfProductIsInWishlist(int $userId, int $productId) : bool; 

}