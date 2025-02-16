<?php


namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\ProductRepositoryInterface;

class ProductService
{

    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getLatestProducts(int $limit)
    {
        return $this->productRepository->getLatestWithRelations($limit);
    }

    public function getBaseProducts(int $userId = null)
    {
        return $this->productRepository->getBaseProduct($userId);
    }


    public function getEightRandomProducts(int $userId = null)
    {
        return $this->getBaseProducts($userId)
            ->inRandomOrder()
            ->limit(8)
            ->get();
        ;
    }



}