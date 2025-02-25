<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\UserRepositoryInterface;
use App\Http\Requests\Users\StoreUserRequest;
use App\Infraestructure\Exceptions\CustomException;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Hash;
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

    public function getInfoUserById(int $userId){

        $userResponse = $this->userRepository->findUniqueUserById($userId);
        if($userResponse->count() > 0 && $userResponse->isEmpty() == false){
            return $userResponse;
        }
        return throw new CustomException('Tu usuario no existe', 404);
    }

    public function login(){
        //pendiente por desarrollar
    }


    public function createUser(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password_hash']); // Encriptar contraseña

        return $this->userRepository->createUser($data);
    }





}