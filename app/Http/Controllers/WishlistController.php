<?php

namespace App\Http\Controllers;

use App\Domain\Services\WishlistService;
use App\Http\Resources\Products\ProductPreviewResource;
use App\Models\Wishlist;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use App\Http\Resources\Wishlist\WishlistProductPreview;
use Illuminate\Http\JsonResponse;
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


        $products = Wishlist::where('user_id', $user)
            ->with([
                'product' => function ($query) {
                    $query->select('id', 'name', 'price')
                        ->withCount('reviews') // Cuenta el número de reviews
                        ->withAvg('reviews', 'rating') // Calcula el promedio de rating
                        ->with('mainImage:product_id,image_url'); // Trae solo la imagen principal
                }
            ])
            ->get()
            ->pluck('product');

        return WishlistProductPreview::collection($products);
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
    public function store(StoreWishlistRequest $request)
    {
        //
    }

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
