<?php


namespace App\Domain\Contracts\Repositories;


interface ProductRepositoryInterface
{
    public function getLatestWithRelations(int $limit);
    public function getBaseProduct(int $userId = null);
}