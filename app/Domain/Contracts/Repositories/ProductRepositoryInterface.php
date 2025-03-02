<?php


namespace App\Domain\Contracts\Repositories;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;


interface ProductRepositoryInterface
{
    public function getLatestProducts(int $limit): Collection;
    public function getBaseQuery(?int $userId = null, array $fields): Builder;
    public function getProductDetail(int $productId, ?int $userId = null): Collection;
    public function getRandomProducts(?int $userId = null, int $limit = 8): Collection;
    public function existProduct(int $productId): bool;


    public function getProductsByIds(array $productIds): Collection;
    public function updateStockBatch(array $stockUpdates): void;
}