<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\CategoryRepositoryInterface;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface{

    public function allCategories():Collection
    {
        $response = Category::select(['id', 'name'])->orderBy('id', 'asc')->get();
        return $response;
    }

    public function allProductsByCategory(?int $idCategory):Collection
    {
        $response = Category::select(['id','name'])->with('products')->where('id' , $idCategory)->get();
        return $response;
    }

}