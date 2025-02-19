<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Domain\Services\CategoryService;

class CategoryController extends Controller
{

    public $categoryService;
    
    public function __construct(CategoryService $categoryService){
        $this->categoryService = $categoryService;
    }


    public function getAllCategories()
    {
       $response = $this->categoryService->getAllCategories();
        return response()->json(CategoryResource::collection($response));

    }

    public function allProductsByCategory(?int $idCategory){
        $response = $this->categoryService->allProductsByCategory($idCategory);
        return response()->json($response);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
