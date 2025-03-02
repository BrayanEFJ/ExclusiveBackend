<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\OrderRepositoryInterface;
use App\Domain\Contracts\Repositories\ProductRepositoryInterface;
use App\Infraestructure\Exceptions\CustomException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class OrderService{

    protected $orderRepository;
    protected $productRepository;

    public function __construct(
        OrderRepositoryInterface $orderRepository,
        ProductRepositoryInterface $productRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
    }

  
    public function createOrder(array $orderData)
    {
        $productItems = collect($orderData['products']);
        $productIds = $productItems->pluck('product_id')->toArray();
        
        // Obtener productos y verificar stock
        $products = $this->productRepository->getProductsByIds($productIds);
        
        // Verificar stock disponible
        $this->checkProductsStock($productItems, $products);
        
        // Ejecutar transacción
        return DB::transaction(function () use ($orderData, $productItems, $products) {
            // Crear la orden con total inicial de 0
            $order = $this->orderRepository->createOrder([
                'user_id' => $orderData['user_id'],
                'status' => 'Pendiente',
                'total_price' => 0,
            ]);
            
            $orderDetails = [];
            $totalPrice = 0;
            $stockUpdates = [];
            
            // Procesar todos los productos
            foreach ($productItems as $item) {
                $productId = $item['product_id'];
                $product = $products[$productId];
                $quantity = $item['quantity'];
                
                $pricePerProduct = $product->price;
                
                $orderDetails[] = [
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'price_per_product' => $pricePerProduct,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                
                $newStock = $product->stock - $quantity;
                $stockUpdates[] = [
                    'id' => $productId,
                    'stock' => $newStock
                ];
                
                $totalPrice += $pricePerProduct * $quantity;
            }
            
            // Insertar detalles y actualizar stocks
            $this->orderRepository->createOrderDetails($orderDetails);
            $this->productRepository->updateStockBatch($stockUpdates);
            
            // Actualizar el total de la orden
            $order = $this->orderRepository->updateOrderTotal($order->id, $totalPrice);
            
            return $order;
        });
    }

    private function checkProductsStock(Collection $productItems, Collection $products)
    {
        $insufficientStockProducts = [];
        
        foreach ($productItems as $item) {
            $productId = $item['product_id'];
            
            if (!isset($products[$productId])) {
                throw new CustomException("El producto con id {$productId} no existe", 400);
            }
            
            if ($products[$productId]->stock < $item['quantity']) {
                $insufficientStockProducts[] = $products[$productId]->name ?? "ID: {$productId}";
            }
        }
        
        if (!empty($insufficientStockProducts)) {
            throw new CustomException("Stock insuficiente para los productos: " . implode(', ', $insufficientStockProducts));
        }
    }

    public function listAllOrders(?int $userId){

        return $this->orderRepository->listAllOrders($userId);
    }


}