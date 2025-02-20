<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\CategoryRepositoryInterface;

use App\Models\Category;
use App\Models\Wishlist;
use DB;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function allCategories(): Collection
    {
        $response = Category::select(['id', 'name'])->orderBy('id', 'asc')->get();
        return $response;
    }

    public function allProductsByCategory(?int $idCategory, ?int $userId): Collection
    {
        $response = Category::select(['id', 'name'])
            ->with([
                'products' => function ($query) use ($userId) {
                    $query->select(['id', 'name', 'price', 'category_id'])
                        ->withCount('reviews')
                        ->withAvg('reviews', 'rating')
                        ->with('mainImage:product_id,image_url')
                        ->addSelect([
                            'is_wishlisted' => Wishlist::select(DB::raw(value: '1'))
                                ->whereColumn('product_id', 'products.id')
                                ->where('user_id', $userId)
                                ->limit(1)
                        ]);
                }
            ])
            ->where('id', $idCategory);

        return $response->get();
    }

}