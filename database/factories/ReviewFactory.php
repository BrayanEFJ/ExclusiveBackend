<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Review::class;

    public function definition(): array
    {
        return [
            'user_id' => rand(1, 5), // IDs de usuarios de 1 a 5
                'product_id' => rand(1, 60), // IDs de productos de 1 a 60
                'rating' => rand(1, 5), // Calificación entre 1 y 5
                'comment' => $this->faker->sentence(rand(8, 15)), // Comentario aleatorio
        ];
    }
}
