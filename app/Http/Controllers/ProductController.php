<?php

namespace App\Http\Controllers;

use App\Domain\Services\ProductService;
use App\Http\Resources\Products\ProductNewsResource;
use App\Http\Resources\Products\ProductPreviewResource;
use App\Http\Resources\Products\ProductUniqueResource;
use App\Infraestructure\Exceptions\CustomException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
            return response()->json(data: ['error' => 'Internal Server Error']);
        }
    }

    public function getEigthRandomProducts($userId = null)
    {
        try {
            $randomEightProducts = $this->productService->getRandomProducts($userId);
            return response()->json(ProductPreviewResource::collection($randomEightProducts));
        } catch (CustomException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return response()->json(data: ['error' => 'Internal Server Error']);

        }
    }


    public function getUniqueProduct($productId, Request $request)
    {
        $user = $request->input('userId') ?? null;

        try {
            $request->validate([
                'userId' => 'integer|min:1|max:9223372036854775807',
            ]);

            $responseUniqueProduct = $this->productService->getProductDetail($productId, $user);
            return response()->json(ProductUniqueResource::collection($responseUniqueProduct));

        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'messages' => $e->errors(),
            ], 422);
        } catch (CustomException $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode()
            ], $e->getCode());

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Ocurrió un error inesperado',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}