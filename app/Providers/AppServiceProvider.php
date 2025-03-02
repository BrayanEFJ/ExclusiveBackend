<?php

namespace App\Providers;

use App\Domain\Contracts\Repositories\CartRepositoryInterface;
use App\Domain\Contracts\Repositories\CategoryRepositoryInterface;
use App\Domain\Contracts\Repositories\OrderRepositoryInterface;
use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Domain\Contracts\Repositories\UserRepositoryInterface;
use App\Domain\Contracts\Repositories\WishlistRepositoryInterface;


use App\Infraestructure\Repositories\CartRepository;
use App\Infraestructure\Repositories\OrderRepository;
use App\Infraestructure\Repositories\CategoryRepository;
use App\Infraestructure\Repositories\ProductRepository;
use App\Infraestructure\Repositories\UserRepository;
use App\Infraestructure\Repositories\WishlistRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class); 
        $this->app->bind(WishlistRepositoryInterface::class, WishlistRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
