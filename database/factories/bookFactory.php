<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class bookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'author' => fake()->name,
            'isbn' => fake()->isbn13,
            'stock' => fake()->numberBetween(0,200),
            'price' => fake()->randomFloat(2,10,100),
        ];
    }
}
