<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\UserRepositoryInterface;
use PhpParser\Node\Expr\Cast\Bool_;

class UserService{

    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    ) {        
    }

    public function checkExistUser(int $userId): bool {
        $userResponse = $this->userRepository->findUniqueUserById($userId);
        if($userResponse->count() > 0 && $userResponse->isEmpty() == false){
            return true;
        }
        return false;
    }




}