<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\WishlistRepositoryInterface;
use App\Infraestructure\Exceptions\CustomException;
use App\Models\Wishlist;
use PhpParser\Node\Expr\FuncCall;

class WishlistService
{
    public $userService;

    public function __construct(
        private readonly WishlistRepositoryInterface $wishlistRepository,
        UserService $userService
    ) {
        $this->userService = $userService;
    }


    public function getWishlistByUser(?int $userId = null)
    {
        $existUser = $this->userService->checkExistUser($userId);
        if (!$existUser) {
            throw new CustomException('Usuario no encontrado', 404);
        }
        $wishlistProducts =  $this->wishlistRepository->getWishlistByUser($userId);
        if ($wishlistProducts->isEmpty()) {
            throw new CustomException('No hay productos en la lista de deseos', 404);
        }
        return $wishlistProducts;
    }


    public function markAsWishlist(int $userId, int $productId)
    {
        $responseMarkproductExist = $this->wishlistRepository->checkIfProductIsInWishlist($userId, $productId);
        if ($responseMarkproductExist) {
            throw new CustomException('Este producto ya ha sido añadido a tu wishlist', 200);
        }
        $this->wishlistRepository->markAsWishlist($userId, $productId);
    }
}
