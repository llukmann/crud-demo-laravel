<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'name' => ucfirst(fake()->words(3, true)),
            'description' => fake()->paragraph(),
            'price' => number_format(fake()->randomFloat(2, 1, 1000), 2, '.', ''),
            'quantity' => fake()->numberBetween(1, 500),
        ];
    }

    /**
     * Indicate that the product has no description.
     */
    public function withoutDescription(): static
    {
        return $this->state([
            'description' => null,
        ]);
    }

    /**
     * Indicate that the product is out of stock.
     */
    public function outOfStock(): static
    {
        return $this->state([
            'quantity' => 0,
        ]);
    }
}
