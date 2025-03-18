<?php

namespace App\Http\Controllers;

use App\Domain\Services\OrderService;
use App\Http\Requests\Orders\StoreOrderRequest;
use App\Models\Order;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderPreviewResource;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function createOrder(StoreOrderRequest $request)
    {
        $result = $this->orderService->createOrder($request->validated());

        return response()->json([
            'message' => 'Orden creada exitosamente',
            'order_id' => $result->id,
        ], 201);
    }



    public function ListOrdersByUser(int $userId)
    {
        $cacheKey = 'orders_user_' . $userId;

        $response = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($userId) {
            return $this->orderService->listAllOrders($userId);
        });
        return response()->json($response);
    }






    // public function createOrder(StoreOrderRequest $request)
    // {

    //     $data = $request->all();
    //     $productItems = collect($data['products']);
    //     $productIds = $productItems->pluck('product_id')->toArray();

    //     // Verificar stock antes de la transacción
    //     $products = Product::select('id', 'price', 'stock', 'name')
    //         ->whereIn('id', $productIds)
    //         ->get()
    //         ->keyBy('id');

    //     // Verificar stock disponible antes de iniciar la transacción
    //     $insufficientStockProducts = [];
    //     foreach ($productItems as $item) {
    //         $productId = $item['product_id'];

    //         if (!isset($products[$productId])) {
    //             throw new CustomException("El producto con id {$productId} no existe", 400);
    //         }

    //         if ($products[$productId]->stock < $item['quantity']) {
    //             $insufficientStockProducts[] = $products[$productId]->name ?? "ID: {$productId}";
    //         }
    //     }

    //     if (!empty($insufficientStockProducts)) {
    //         throw new CustomException("Stock insuficiente para los productos: " . implode(', ', $insufficientStockProducts));
    //     }

    //     // Iniciar transacción después de validaciones
    //     return DB::transaction(function () use ($data, $productItems, $products) {
    //         // Crear la orden con total inicial de 0
    //         $order = Order::create([
    //             'user_id' => $data['user_id'],
    //             'status' => 'Pendiente',
    //             'total_price' => 0,
    //         ]);

    //         // Preparar arrays para inserciones y actualizaciones en lote
    //         $orderDetails = [];
    //         $totalPrice = 0;
    //         $stockUpdates = [];

    //         // Procesar todos los productos en un solo loop
    //         foreach ($productItems as $item) {
    //             $productId = $item['product_id'];
    //             $product = $products[$productId];
    //             $quantity = $item['quantity'];

    //             // Calcular precio (añadir lógica de descuento si es necesaria)
    //             $pricePerProduct = $product->price;

    //             // Acumular detalles para inserción masiva
    //             $orderDetails[] = [
    //                 'order_id' => $order->id,
    //                 'product_id' => $productId,
    //                 'quantity' => $quantity,
    //                 'price_per_product' => $pricePerProduct,
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ];

    //             // Actualizar el stock en memoria
    //             $newStock = $product->stock - $quantity;
    //             $stockUpdates[] = [
    //                 'id' => $productId,
    //                 'stock' => $newStock
    //             ];

    //             // Acumular el precio total
    //             $totalPrice += $pricePerProduct * $quantity;
    //         }

    //         // Insertar todos los detalles en una sola operación
    //         Order_detail::insert($orderDetails);

    //         // Actualizar el stock usando updateOrInsert en lote
    //         foreach ($stockUpdates as $update) {
    //             Product::where('id', $update['id'])->update(['stock' => $update['stock']]);
    //         }

    //         // Actualizar el total de la orden
    //         $order->total_price = $totalPrice;
    //         $order->save();

    //         return response()->json([
    //             'message' => 'Orden creada exitosamente',
    //             'order_id' => $order->id,
    //         ],201);

    //     });
    // }

    /**
     * Calcula el precio del producto considerando descuentos activos
     * 
     * @param Product $product
     * @return float
     */


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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
