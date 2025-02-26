<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Infraestructure\Exceptions\CustomException;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function createOrder(Request $request)
    {

        $data = $request->all();

        return DB::transaction(function () use ($data) {
            // Crear la orden con total inicial de 0
            $order = Order::create([
                'user_id' => $data['user_id'],
                'status' => 'Pendiente',
                'total_price' => 0,
            ]);

            // Obtener IDs de productos
            $productItems = collect($data['products']);
            $productIds = $productItems->pluck('product_id')->unique()->values();

            // Cargar productos con sus descuentos activos en una sola consulta
            $products = Product::select('id', 'price', 'stock', 'name')
                ->with([
                    'discount' => function ($query) {
                        $query->select('id', 'product_id', 'discount_percentage', 'start_date', 'end_date')
                            ->where('start_date', '<=', now())
                            ->where('end_date', '>=', now());
                    }
                ])
                ->whereIn('id', $productIds)
                ->get();

            // Transformar la colección en un mapa indexado por ID con cantidades incluidas
            $products = $products->keyBy('id');

            // Añadir las cantidades solicitadas directamente a los productos, posible mejora de rencimiento por probar
            // foreach ($productItems as $item) {
            //     if (isset($products[$item['product_id']])) {
            //         $products[$item['product_id']]->requested_quantity = $item['quantity'];
            //     }
            // }


            $insufficientStockProducts = [];
            foreach ($productItems as $item) {
                $productId = $item['product_id'];
                if (0 >= $item['quantity']) {
                    throw new CustomException("No se admiten pedidos con cantidades iguales o menores a 0", 400);
                }
                if (!isset($products[$productId])) {
                    throw new CustomException("El producto con id " . $productId . " no existe", 400);
                }
                if ($products[$productId]->stock < $item['quantity']) {
                    $insufficientStockProducts[] = $products[$productId]->name ?? "ID: {$productId}";
                }
            }

            if (!empty($insufficientStockProducts)) {
                throw new CustomException("Stock insuficiente para los productos: " . implode(', ', $insufficientStockProducts));
            }

            $orderDetails = [];
            $totalPrice = 0;
            $stockUpdates = [];

            foreach ($productItems as $item) {
                $product = $products->firstWhere('id', $item['product_id']);
                $pricePerProduct = $product->price;

                // Acumular detalles de la orden
                $orderDetails[] = [
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price_per_product' => $pricePerProduct,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Preparar actualización de stock
                $stockUpdates[$product->id] = [
                    'stock' => $product->stock - $item['quantity']
                ];

                // Calcular precio total
                $totalPrice += $pricePerProduct * $item['quantity'];
            }

            // Insertar detalles en una sola operación
            Order_detail::insert($orderDetails);

            // Actualizar stock usando actualizaciones masivas
            foreach ($stockUpdates as $productId => $update) {
                Product::where('id', $productId)->update($update);
            }

            // Actualizar el total de la orden
            $order->total_price = $totalPrice;
            $order->save();

            // Cargar relaciones necesarias y devolver
            return $order->load('details.product');


        });
    }

    /**
     * Calcula el precio del producto considerando descuentos activos
     * 
     * @param Product $product
     * @return float
     */
    private function calculateProductPrice(Product $product)
    {
        if ($product->discount->isNotEmpty() && $product->discount != null) {
            $discount = $product->discount->first();
            return $product->price - ($product->price * $discount->percentage / 100);
        }

        return $product->price;
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
