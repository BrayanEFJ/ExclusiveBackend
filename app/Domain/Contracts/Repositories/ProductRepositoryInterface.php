<?php


namespace App\Domain\Contracts\Repositories;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;


interface ProductRepositoryInterface
{
    public function getLatestProducts(int $limit): Collection;
    public function getBaseQuery(?int $userId = null, array $fields = self::BASE_FIELDS): Builder;
    public function getProductDetail(int $productId, ?int $userId = null): Collection;
    public function getRandomProducts(?int $userId = null, int $limit = 8): Collection;
}