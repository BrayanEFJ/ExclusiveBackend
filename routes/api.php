<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
        Route::post('/markAsWishlist', [WishlistController::class, 'markAsWishlist'])->name('markAsWishlist');
        Route::get('/getProducts', [WishlistController::class, 'getWishlistByUser'])->name('GetWishlistByUser');
    });

    Route::prefix('Users')->group(function(){
        Route::get('/getInfoUser', [UserController::class, 'getInfoUserById'])->name('getInfoUserById');
        Route::post('/Create', [UserController::class, 'createUser'])->name('createUser');
    });

    Route::prefix('Cart')->group(function(){
        Route::get('/getInfoCart/{userId}', [CartController::class, 'getInfoCartByUserId'])->name('getInfoCartByUserId');
    });

    Route::prefix('Order')->group(function(){
        Route::post('/', [OrderController::class, 'createOrder'])->name('createOrder');
        Route::get('/ListOrdersByUser/{userId}', [OrderController::class, 'ListOrdersByUser'])->name('ListOrdersByUser');
    });







});






