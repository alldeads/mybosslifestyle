<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->realText(10),
            'bio' => fake()->text(50),
            'description' => fake()->text(200),
            'price' => rand(100,200),
            'quantity' => rand(1000, 2000),
        ];
    }
}
