<?php

namespace App\Http\Controllers;

use App\Http\Resources\Products\ProductNewsResource;
use App\Http\Resources\Products\ProductPreviewResource;
use App\Http\Resources\Products\ProductUniqueResource;
use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Wishlist;
use DB;

class ProductController extends Controller
{
   
    private function getBaseProductQuery($userId = null)
    {
        $query = Product::select([
            'id',
            'name',
            'price'
        ])
        ->withCount('reviews')
        ->withAvg('reviews', 'rating')
        ->with('mainImage:product_id,image_url');

        if ($userId) {
            $query->addSelect([
                'is_wishlisted' => Wishlist::select(DB::raw(1))
                    ->whereColumn('product_id', 'products.id')
                    ->where('user_id', $userId)
                    ->limit(1)
            ]);
        }

        return $query;
    }
    
    public function getEigthRandomProducts($id = null)
    {
        try {
            $products = $this->getBaseProductQuery($id)
                ->inRandomOrder()
                ->limit(8)
                ->get();

            return response()->json(ProductPreviewResource::collection($products));

        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()], 400);
        }
    }

    public function getFourNewProducts()
    {
        try {
            $products = Product::select(['id', 'name'])
                ->with([
                    'category:id,name',
                    'mainImage:product_id,image_url'
                ])
                ->latest()
                ->limit(4)
                ->get();

            return response()->json(ProductNewsResource::collection($products));
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()], 400);
        }
    }
    
    public function getUniqueProduct($id)
    {
        try {
            $infoUniqueProduct = $this->getBaseProductQuery($id)
                ->addSelect([
                    'description',
                    'stock',
                    'category_id'
                ])
                ->with([
                    'category:id,name',
                    'features:id,name',
                    'reviews',
                    'reviews.images',
                    'images:product_id,image_url,alt_text',
                    'category.products' => function ($query) use ($id) {
                        $this->getBaseProductQuery($id)
                            ->where('id', '!=', $id)
                            ->inRandomOrder()
                            ->limit(8);
                    }
                ])
                ->where('id', $id)
                ->get();

            return response()->json($infoUniqueProduct);

        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()], 400);
        }
    }
}