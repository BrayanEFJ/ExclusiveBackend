<?php

namespace App\Http\Controllers;

use App\Domain\Services\ProductService;
use App\Http\Resources\Products\ProductNewsResource;
use App\Http\Resources\Products\ProductPreviewResource;
use App\Http\Resources\Products\ProductUniqueResource;
use App\Infraestructure\Exceptions\CustomException;
use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Wishlist;
use DB;

class ProductController extends Controller
{

    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getFourNewProducts()
    {
        try {
            $products = $this->productService->getLatestProducts(4);
            return response()->json(ProductNewsResource::collection($products));
        } catch (CustomException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function getEigthRandomProducts($userId = null)
    {
        try {
            $randomEightProducts = $this->productService->getEightRandomProducts($userId);
            return response()->json($randomEightProducts);
        } catch (CustomException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        } catch (\Exception $e) {

        }
    }


    // public function getUniqueProduct($id)
    // {
    //     try {
    //         $infoUniqueProduct = $this->getBaseProductQuery($id)
    //             ->addSelect([
    //                 'description',
    //                 'stock',
    //                 'category_id'
    //             ])
    //             ->with([
    //                 'category:id,name',
    //                 'features:id,name',
    //                 'reviews',
    //                 'reviews.images',
    //                 'images:product_id,image_url,alt_text',
    //                 'category.products' => function ($query) use ($id) {
    //                     $this->getBaseProductQuery($id)
    //                         ->where('id', '!=', $id)
    //                         ->inRandomOrder()
    //                         ->limit(8);
    //                 }
    //             ])
    //             ->where('id', $id)
    //             ->get();

    //         return response()->json($infoUniqueProduct);

    //     } catch (\Throwable $th) {
    //         return response()->json(["error" => $th->getMessage()], 400);
    //     }
    // }
}