<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::prefix('v1')->group(function () {
    Route::get('Categories', [CategoryController::class, 'getAllCategories'])->name('allCategories');
    Route::get('Products/RandomEight/{id?}', [ProductController::class, 'getEigthRandomProducts'])->name('RandomEightProducts');
    Route::get('Products/FourNewProducts', [ProductController::class, 'getFourNewProducts'])->name('getFourNewProducts');
    Route::get('Products/UniqueProduct/{id}', [ProductController::class, 'GetUniqueProduct'])->name('GetUniqueProduct');
    Route::get('Categories/Products/{idCategory}',[CategoryController::class, 'allProductsByCategory'])->name('GetProductsByCategory');

});





