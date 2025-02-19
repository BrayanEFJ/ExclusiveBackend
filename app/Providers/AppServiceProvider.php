<?php

namespace App\Providers;

use App\Domain\Contracts\Repositories\CategoryRepositoryInterface;
use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Infraestructure\Repositories\CategoryRepository;
use App\Infraestructure\Repositories\ProductRepository;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
