<?php
namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\CategoryRepositoryInterface;
use App\Infraestructure\Exceptions\CustomException;

class CategoryService
{
    public $userService;

    public function __construct(
        private  readonly  CategoryRepositoryInterface $categoryRepository,
        UserService $userService,
    ){
        $this->userService = $userService;
    }

    public function getAllCategories(){
        return $this->categoryRepository->allCategories();
    }


    public function allProductsByCategory(?int $idCategory, ?int $userId){
        if (isset($userId)) {
            $existUser = $this->userService->checkExistUser($userId);
            if (!$existUser) {
                throw new CustomException('Usuario no encontrado', 404);
            }
        }
        $existCategory = $this->categoryRepository->existCategory($idCategory);
        if (!$existCategory) {
            throw new CustomException('Categoria no encontrada', 404);
        }
        return $this->categoryRepository->allProductsByCategory($idCategory, $userId);
    }


    
}