<?php


namespace App\Domain\Contracts\Repositories;

use Illuminate\Support\Collection;

interface OrderDetailRepositoryInterface{
    public function listBestSellers(?int $userId = null) : Collection;
}