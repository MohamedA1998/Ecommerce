<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'unit_amount' => $this->faker->randomFloat(2, 1, 100),
            'total_amount' => function (array $attributes) {
                return $attributes['quantity'] * $attributes['unit_amount'];
            },
        ];
    }
}
