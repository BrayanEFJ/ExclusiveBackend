<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::prefix('v1')->group(function () {

    Route::prefix('Categories')->group(function () {
        Route::get('/', [CategoryController::class, 'getAllCategories'])->name('allCategories');
        Route::get('Products/{idCategory}', [CategoryController::class, 'allProductsByCategory'])->name('GetProductsByCategory');
    });
    
    Route::prefix('Products')->group(function () {
        Route::get('RandomEight/{id?}', [ProductController::class, 'getEigthRandomProducts'])->name('RandomEightProducts');
        Route::get('FourNewProducts', [ProductController::class, 'getFourNewProducts'])->name('getFourNewProducts');
        Route::get('UniqueProduct/{id}', [ProductController::class, 'GetUniqueProduct'])->name('GetUniqueProduct');
    });

    Route::prefix('Wishlist')->group(function(){
        Route::get('/getProducts', [WishlistController::class, 'getWishlistByUser'])->name('GetWishlistByUser');
    });

});






