<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'description' => fake()->text(),
            'image' => fake()->word(),
            'client' => fake()->regexify('[A-Za-z0-9]{150}'),
            'project_url' => fake()->word(),
            'category' => fake()->regexify('[A-Za-z0-9]{100}'),
            'sort_order' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
