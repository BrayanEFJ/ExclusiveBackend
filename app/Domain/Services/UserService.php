<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\UserRepositoryInterface;
use App\Http\Requests\Users\StoreUserRequest;
use App\Infraestructure\Exceptions\CustomException;
use ErrorException;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    ) {}

    public function checkExistUser(int $userId): bool
    {
        $userResponse = $this->userRepository->findUniqueUserById($userId);
        if ($userResponse->count() > 0 && $userResponse->isEmpty() == false) {
            return true;
        }
        return false;
    }

    public function getInfoUserById(int $userId)
    {

        $userResponse = $this->userRepository->findUniqueUserById($userId);
        if ($userResponse->count() > 0 && $userResponse->isEmpty() == false) {
            return $userResponse;
        }
        return throw new CustomException('Tu usuario no existe', 404);
    }

    public function login()
    {
        //pendiente por desarrollar
    }


    public function createUser(array $validatedData)
    {
        try {
            $validatedData['password_hash'] = Hash::make($validatedData['password']);
            $user = $this->userRepository->createUser($validatedData);
            return $user;
        } catch (Exception $e) {
            throw new CustomException($e->getMessage(), 422);
        }
    }
}
