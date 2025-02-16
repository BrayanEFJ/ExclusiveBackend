<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\Wishlist;
use DB;

class ProductRepository implements ProductRepositoryInterface
{

    public function getLatestWithRelations(int $limit)
    {
        return Product::select(['id', 'name','category_id'])
            ->with([
                'category',
                'mainImage:product_id,image_url'
            ])
            ->latest()
            ->limit($limit)
            ->get();
    }
    public function getBaseProduct(int $userId = null){
        $baseProduct = Product::select([
            'id',
            'name',
            'price'
        ])
        ->withCount('reviews')
        ->withAvg('reviews', 'rating')
        ->with('mainImage:product_id,image_url');

        if ($userId) {
            $baseProduct->addSelect([
                'is_wishlisted' => Wishlist::select(DB::raw(1))
                    ->whereColumn('product_id', 'products.id')
                    ->where('user_id', $userId)
                    ->limit(1)
            ]);
        }
        return $baseProduct;
    }


}