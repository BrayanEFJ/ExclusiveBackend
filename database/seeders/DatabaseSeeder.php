<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            WishlistSeeder::class,
            ReviewSeeder::class,
            ProductImageSeeder::class,
            FeatureSeeder::class,
            FeatureProductSeeder::class,
        ]);

        //Wishlist::factory(100000)->create();

    }
}
