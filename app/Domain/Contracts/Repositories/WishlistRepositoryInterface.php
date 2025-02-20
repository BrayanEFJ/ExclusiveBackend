<?php

namespace App\Domain\Contracts\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface WishlistRepositoryInterface{

    public function getWishlistByUser(?int $userId) : Collection;

}