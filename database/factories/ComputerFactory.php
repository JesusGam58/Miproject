<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComputerFactory extends Factory
{

    public function definition(): array
    {
        return [
            'model' => fake()->name(),
            'mark' => fake()->name(),
            'size' => fake()->numberBetween(11,17), //generador aleatorio
            'published_at' => fake()->datetime(),
            'is_active' => fake()->boolean(),
        ];
    }
}