<?php


namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Infraestructure\Exceptions\CustomException;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{

    public function __construct(
        private readonly ProductRepositoryInterface $productRepository
    ) {}

    public function getLatestProducts(int $limit): Collection
    {
        return $this->productRepository->getLatestProducts($limit);
    }

    public function getRandomProducts(?int $userId = null, int $limit = 8): Collection
    {
        return $this->productRepository->getRandomProducts($userId, $limit);
    }

    public function getProductDetail(int $productId, ?int $userId = null): Collection
    {

        $productInfo = $this->productRepository->getProductDetail($productId, $userId);

        if ($productInfo->isEmpty()) {
            throw new CustomException('Producto no encontrado', 404);
        }

        return $productInfo;
    }



}