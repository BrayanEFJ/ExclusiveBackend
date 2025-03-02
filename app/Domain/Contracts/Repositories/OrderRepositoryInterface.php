<?php

namespace App\Domain\Contracts\Repositories;

use App\Models\Order;

interface OrderRepositoryInterface{
    public function createOrder(array $orderData): Order;
    public function createOrderDetails(array $orderDetails): void;
    public function updateOrderTotal(int $orderId, float $totalPrice): Order;
    public function listAllOrders(?int $userId);
}