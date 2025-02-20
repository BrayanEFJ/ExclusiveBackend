<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\WishlistRepositoryInterface;

class WishlistService{

    public function __construct(
        private readonly WishlistRepositoryInterface $wishlistRepository    ){
    }


    public function getWishlistByUser(?int $userId = null){
        return $this->wishlistRepository->getWishlistByUser($userId);
    }
    

}