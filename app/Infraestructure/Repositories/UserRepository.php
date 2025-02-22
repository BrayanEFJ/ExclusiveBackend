<?php


namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function findUniqueUserById(int $userId) : Collection {

        $user = User::where('id', $userId)->limit(1)->get();
        return $user;
    }

}