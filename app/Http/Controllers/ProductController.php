<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductPreviewResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
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
                ->with('images')
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
                    'categories:id,name',
                    'images:id,product_id,image_url'
                ])
                ->latest()
                ->limit(4)
                ->get();

            return response()->json($products);
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
            $infoUniqueProduct = Product::select(['id', 'name', 'description', 'stock'])
                ->with([
                    'categories:id,name',
                    'features:id,name',
                ])
                ->where('id', $id)
                ->get();
    
            return response()->json($infoUniqueProduct);
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
