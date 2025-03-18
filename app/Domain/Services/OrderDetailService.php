<?php

namespace App\Domain\Services;

use App\Domain\Contracts\Repositories\OrderDetailRepositoryInterface;

class OrderDetailService{

    public function __construct( private readonly OrderDetailRepositoryInterface $orderDetailRepository )
    {
    }


    public function listBestSellers(?int $userId = null)
    {
        try {
            return $this->orderDetailRepository->listBestSellers($userId);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}