<?php

namespace App\Domain\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function findUniqueUserById(int $userId) : Collection;

}
