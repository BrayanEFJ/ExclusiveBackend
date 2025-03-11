<?php

namespace App\Http\Controllers;

use App\Models\Order_detail;
use App\Http\Requests\StoreOrder_detailRequest;
use App\Http\Requests\UpdateOrder_detailRequest;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function listBestSellers()
    {
        try {
            $topProducts = Order_detail::select('products.id', 'products.name', DB::raw('COUNT(products.name) as total'))
                ->join('products', 'order_details.product_id', '=', 'products.id')
                ->groupBy('order_details.product_id', 'products.name')
                ->orderByDesc('total')
                ->limit(4)
                ->get();

            return response()->json($topProducts, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
    public function store(StoreOrder_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_detail $order_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order_detail $order_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrder_detailRequest $request, Order_detail $order_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order_detail $order_detail)
    {
        //
    }
}
