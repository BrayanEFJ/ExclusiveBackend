<?php

namespace App\Http\Controllers;

use App\Domain\Services\WishlistService;
use App\Models\Wishlist;
use App\Http\Requests\UpdateWishlistRequest;
use App\Http\Requests\Wishlist\MarkWishlistRequest;
use App\Http\Resources\Wishlist\WishlistProductPreview;
use App\Infraestructure\Exceptions\CustomException;
use Exception;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    private $wishlistService;

    public function __construct(WishlistService $wishlistService)
    {
        $this->wishlistService = $wishlistService;
    }


    public function getWishlistByUser(Request $request)
    {

        $request->validate([
            'userId' => 'required|integer|min:1|max:9223372036854775807'
        ]);

        $user = $request->query('userId');

        $products = $this->wishlistService->getWishlistByUser($user);

        return response()->json(WishlistProductPreview::collection($products));
    }

    public function markAsWishlist(MarkWishlistRequest $request)
    {
        $user_id = $request->input('user_id');
        $product_id = $request->input('product_id');

        $this->wishlistService->markAsWishlist($user_id, $product_id);
        return response()->json(['message' => 'Producto añadido a wishlist', 'status' => '201'], 201);
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
