<?php

namespace App\Http\Controllers;

use App\Domain\Services\CartService;
use App\Http\Resources\Cart\CartPreviewResource;
use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
   
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }



    public function getInfoCartByUserId(int $userId)
    {
        $response = $this->cartService->getCartByUserId($userId);
        return response()->json(CartPreviewResource::collection($response));
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
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
