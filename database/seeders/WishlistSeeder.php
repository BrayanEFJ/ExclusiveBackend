<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wishlist::create([
            'user_id' => 1,
            'product_id' => 5,
        ]);
        Wishlist::create([
            'user_id' => 1,
            'product_id' => 2,
        ]);
        Wishlist::create([
            'user_id' => 1,
            'product_id' => 30,
        ]);
        Wishlist::create([
            'user_id' => 1,
            'product_id' => 42,
        ]);
        Wishlist::create([
            'user_id' => 2,
            'product_id' => 10,
        ]);
        Wishlist::create([
            'user_id' => 2,
            'product_id' => 15,
        ]);
        Wishlist::create([
            'user_id' => 3,
            'product_id' => 1,
        ]);
        Wishlist::create([
            'user_id' => 3,
            'product_id' => 42,
        ]);
        Wishlist::create([
            'user_id' => 3,
            'product_id' => 50,
        ]);

    }
}
