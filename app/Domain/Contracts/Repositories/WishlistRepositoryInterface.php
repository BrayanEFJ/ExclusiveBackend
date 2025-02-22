<?php

namespace App\Domain\Contracts\Repositories;

use Illuminate\Support\Collection;

interface WishlistRepositoryInterface{

    public function getWishlistByUser(?int $userId) : Collection;

}