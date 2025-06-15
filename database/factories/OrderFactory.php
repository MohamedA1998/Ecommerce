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
            'grand_total' => $this->faker->randomFloat(2, 10, 1000),
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
            'payment_status' => $this->faker->randomElement(['paid', 'pending', 'failed']),
            'status' => $this->faker->randomElement(\App\Models\Order::$status),
            'currency' => $this->faker->currencyCode(),
            'shipping_amount' => $this->faker->randomFloat(2, 0, 50),
            'shipping_method' => $this->faker->randomElement(['standard', 'express']),
            'notes' => $this->faker->optional()->text(200),
        ];
    }
}
