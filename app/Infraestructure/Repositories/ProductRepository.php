<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB as DB;
use Request;

class ProductRepository implements ProductRepositoryInterface
{

    private const BASE_FIELDS = ['id', 'name', 'price'];
    private const DETAIL_FIELDS = ['description', 'stock', 'category_id'];
    private const LATEST_FIELDS = ['id', 'name', 'category_id'];
    private const RELATED_PRODUCTS_FIELDS = ['id', 'name', 'category_id', 'price'];

    public function getLatestProducts(int $limit): Collection
    {
        return Product::select(self::LATEST_FIELDS)
            ->with(['category', 'mainImage:product_id,image_url'])
            ->latest()
            ->limit($limit)
            ->get();
    }

    public function getBaseQuery(?int $userId = null, array $fields = self::BASE_FIELDS): Builder
    {
        $query = Product::select($fields)
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->with('mainImage:product_id,image_url');

        return $this->applyWishlistScope($query, $userId);
    }

    private function applyWishlistScope(Builder $query, ?int $userId): Builder
    {
        if ($userId) {
            $query->addSelect([
                'is_wishlisted' => Wishlist::select(DB::raw('1'))
                    ->whereColumn('product_id', 'products.id')
                    ->where('user_id', $userId)
                    ->limit(1)
            ]);
        }
        return $query;
    }

    public function existProduct(int $productId): bool
    {
        return Product::where('id', $productId)->exists();
    }

    public function getProductDetail(int $productId, ?int $userId = null): Collection
    {
        return $this->getBaseQuery($userId, array_merge(self::BASE_FIELDS, self::DETAIL_FIELDS))
            ->with($this->getDetailRelations($productId, $userId))
            ->where('id', $productId)
            ->get();
    }

    private function getDetailRelations(int $productId, ?int $userId = null): array
    {
        return [
            'category:id,name',
            'features:id,name',
            'reviews:user_id,rating,comment,product_id',
            'reviews.user:id,name',
            'reviews.images',
            'images:product_id,image_url,alt_text',
            'category.products' => function ($query) use ($productId, $userId) {
                $query->select(self::RELATED_PRODUCTS_FIELDS)
                    ->withCount('reviews')
                    ->withAvg('reviews', 'rating')
                    ->with('mainImage:product_id,image_url')
                    ->where('id', '!=', $productId)
                    ->inRandomOrder()
                    ->limit(4);

                if ($userId) {
                    $query->addSelect([
                        'is_wishlisted' => Wishlist::select(DB::raw(1))
                            ->whereColumn('product_id', 'products.id')
                            ->where('user_id', $userId)
                            ->limit(1)
                    ]);
                }
            }
        ];
    }

    public function getRandomProducts(?int $userId = null, int $limit = 8): Collection
    {
        return $this->getBaseQuery($userId)
            ->inRandomOrder()
            ->limit($limit)
            ->get();
    }

    public function getProductsByIds(array $productIds): Collection
    {
        return Product::select('id', 'price', 'stock', 'name')
            ->whereIn('id', $productIds)
            ->get()
            ->keyBy('id');
    }

    public function updateStockBatch(array $stockUpdates): void
    {
        foreach ($stockUpdates as $update) {
            Product::where('id', $update['id'])->update(['stock' => $update['stock']]);
        }
    }

}