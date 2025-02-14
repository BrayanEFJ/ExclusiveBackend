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
    /**
     * Display a listing of the resource.
     */
    public function getEigthRandomProducts($id = null)
    {
        try {
            $products = Product::select([
                'id',
                'name',
                'price'
            ])
                ->withCount('reviews')
                ->withAvg('reviews', 'rating')
                ->with('mainImage:product_id,image_url')
                ->addSelect([
                    'is_wishlisted' => Wishlist::select(DB::raw(1))
                        ->whereColumn('product_id', 'products.id')
                        ->where('user_id', $id)
                        ->limit(1)
                ])
                ->inRandomOrder()
                ->limit(8)
                ->get();

            return response()->json(ProductPreviewResource::collection($products));

        } catch (\Throwable $th) {
            response()->json(["error" => $th->getMessage()], 400);
        }
    }


    public function getFourNewProducts()
    {
        try {
            $products = Product::select(['id', 'name'])
                ->with([
                    'category:id,name',
                    'mainImage:product_id,image_url' // Relación solo con la imagen principal
                ])
                ->latest()
                ->limit(4)
                ->get();

            return response()->json( ProductNewsResource::collection($products));
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()], 400);
        }
    }



    // traer  num stock, descripcion,
    //   caracteristica y valor de caracteristica, traer categoria
    /**
     * Store a newly created resource in storage.
     */
    public function GetUniqueProduct($id)
    {
        try {
            $infoUniqueProduct = Product::select([
                'id', 'price', 'name', 'description', 'stock',
            ])
            ->with([
                'category:id,name',
                'features:id,name',
                'images:product_id,image_url,alt_text',
                // Añadimos relación para productos similares
                'category.products' => function($query) use ($id) {
                    $query->select('products.id', 'name', 'price', 'stock')
                        ->where('products.id', '!=', $id)
                        ->with('mainImage:product_id,image_url')
                        ->inRandomOrder()
                        ->limit(4);
                }
            ])
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->addSelect([
                'is_wishlisted' => Wishlist::select(DB::raw(1))
                    ->whereColumn('product_id', 'products.id')
                    ->where('user_id', $id)
                    ->limit(1)
            ])
            ->where('id', $id)
            ->get();

            return response()->json($infoUniqueProduct);
            //return response()->json(ProductUniqueResource::collection(resource: $infoUniqueProduct));

        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()], 400);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
