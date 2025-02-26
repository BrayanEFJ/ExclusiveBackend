<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\CartRepositoryInterface;
use App\Infraestructure\Exceptions\CustomException;

class CartService
{

    private $userService;

    public function __construct(
        private readonly CartRepositoryInterface $cartRepository,
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    // public function checkExistCart(int $cartId): bool {
    //     $cartResponse = $this->cartRepository->findUniqueCartByUserId($cartId);
    //     if($cartResponse->count() > 0 && $cartResponse->isEmpty() == false){
    //         return true;
    //     }
    //     return false;
    // }


    public function getCartByUserId(int $userId)
    {
        $userExist = $this->userService->checkExistUser($userId);
        if (!$userExist) {
            return throw new CustomException('El usuario no ha sido encontrado', 404);
        } else {
            $cartResponse = $this->cartRepository->findUniqueCartByUserId($userId);
            if ($cartResponse->count() > 0 && $cartResponse->isEmpty() == false) {
                return $cartResponse;
            }
            return throw new CustomException('No tienes ningun articulo en tu carrito', 404);
        }
    }

}