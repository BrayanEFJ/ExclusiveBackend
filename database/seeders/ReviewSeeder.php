<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 60) as $product_id) {
            Review::factory()->count(rand(1, 3))->create([
                'product_id' => $product_id
            ]);
        }
    }
}
