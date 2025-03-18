<?php


namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Infraestructure\Exceptions\CustomException;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Isset_;

class ProductService
{

    public $userService;


    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        UserService $userService
    ) {
        $this->userService = $userService;
    }

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
        if (isset($userId)) {
            $existUser = $this->userService->checkExistUser($userId);
            if (!$existUser) {
                throw new CustomException('Usuario no encontrado', 404);
            }
        }
        $productInfo = $this->productRepository->getProductDetail($productId, $userId);
        if ($productInfo->isEmpty()) {
            throw new CustomException('El producto no ha sido encontrado', code: 404);
        }
        return $productInfo;
    }

    public function existProduct(int $productId): bool
    {
        $productInfo = $this->productRepository->existProduct($productId);
        if ($productInfo) {
            return true;
        }
        return false;
    }
   
}
