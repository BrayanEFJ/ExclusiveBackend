<?php

namespace App\Domain\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface{

    public function allCategories():Collection;
    public function allProductsByCategory(?int $idCategory, ?int $userId):Collection;
    public function existCategory(int $idCategory): bool;

}
    