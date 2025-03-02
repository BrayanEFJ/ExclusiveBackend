<?php


namespace App\Infraestructure\Repositories;

use App\Domain\Contracts\Repositories\OrderRepositoryInterface;
use App\Models\Order;
use App\Models\Order_detail;

class OrderRepository implements OrderRepositoryInterface
{
    public function createOrder(array $orderData): Order
    {
        return Order::create($orderData);
    }

    public function createOrderDetails(array $orderDetails): void
    {
        Order_detail::insert($orderDetails);
    }

    public function updateOrderTotal(int $orderId, float $totalPrice): Order
    {
        $order = Order::findOrFail($orderId);
        $order->total_price = $totalPrice;
        $order->save();
        
        return $order;
    }

    public function listAllOrders(?int $userId){
        return Order::where('user_id', $userId)->get();
    }


}