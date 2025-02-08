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

    //hay que traer Nombre, precio, si es wishlist, rating, numero de reviews
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
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
