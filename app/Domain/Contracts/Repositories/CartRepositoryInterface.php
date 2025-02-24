<?php

namespace App\Domain\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface CartRepositoryInterface{
    public function findUniqueCartByUserId(?int $userId) : Collection;

}