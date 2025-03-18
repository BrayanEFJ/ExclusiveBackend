<?php

namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\OrderDetailRepositoryInterface;
use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class OrderDetailRepository implements OrderDetailRepositoryInterface
{

    public function __construct(private readonly ProductRepositoryInterface $productRepository) {}

    private const BASE_FIELDS = ['id', 'name', 'price'];


    public function listBestSellers(?int $userId = null): Collection
    {
        // Primero obtenemos los IDs de los productos más vendidos
        $topProductIds = Order_detail::select('product_id')
            ->selectRaw('SUM(quantity) as total_quantity')
            ->groupBy('product_id')
            ->orderByDesc('total_quantity')
            ->limit(5)
            ->pluck('product_id');

        // Ahora usamos estos IDs para obtener los productos con toda la información requerida
        $query = Product::whereIn('id', $topProductIds)
            ->select(self::BASE_FIELDS)
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->with('mainImage:product_id,image_url');
        
        // Aplicamos el scope de wishlist si hay un usuario
        if ($userId) {
            $query->addSelect([
                'is_wishlisted' => Wishlist::select(DB::raw('1'))
                    ->whereColumn('product_id', 'products.id')
                    ->where('user_id', $userId)
                    ->limit(1)
            ]);
        }
        
        return $query->get();
    }
}
