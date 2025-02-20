<?php
namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\CategoryRepositoryInterface;


class CategoryService
{

    public function __construct(
        private  readonly  CategoryRepositoryInterface $categoryRepository
    ){}

    public function getAllCategories(){
        return $this->categoryRepository->allCategories();
    }


    public function allProductsByCategory(?int $idCategory, ?int $userId){
        return $this->categoryRepository->allProductsByCategory($idCategory, $userId);
    }
}