<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1,5), // Crea un usuario si no existe
            'status' => $this->faker->randomElement(['Pendiente', 'Enviado', 'Entregado']),
            'total_price' => $this->faker->randomFloat(2, 10, 1500), // Precio entre 10 y 500
        ];
    }
}
