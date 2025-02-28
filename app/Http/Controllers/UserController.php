<?php

namespace App\Http\Controllers;

use App\Domain\Services\UserService;
use App\Http\Requests\Users\LoginUserRequest;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Resources\Users\UsersInfoEssential;
use App\Infraestructure\Exceptions\CustomException;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(
        private readonly UserService $userService
    ) {}

    public function getInfoUserById(Request $request)
    {
        $userId = $request->input('userId');
        $user = $this->userService->getInfoUserById($userId);
        return response()->json(UsersInfoEssential::collection($user));
    }

    public function login(LoginUserRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        //pendiente por desarrollar
    }

    public function createUser(StoreUserRequest $request)
    {
        return $this->userService->createUser($request);
    }
}
