<?php


namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function findUniqueUserById(int $userId): Collection
    {

        $user = User::select('id', 'name', 'email', 'address', 'created_at')->where('id', $userId)->limit(1)->get();
        return $user;
    }


    public function infoLogin(): Collection
    {
        //pendiente por desarrollar
        $user = User::select('id', 'name', 'email', 'password_hash', 'created_at')->get();
        return $user;
    }

    public function createUser(array $data)
    {
        try {
            $user = User::create($data);
            return $user::select( 'id','name', 'email', 'address','created_at')->where('id', $user->id)->get( );
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
