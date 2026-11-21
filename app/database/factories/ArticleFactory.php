<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'excerpt' => fake()->text(),
            'content' => fake()->paragraphs(3, true),
            'thumbnail' => fake()->word(),
            'published_at' => fake()->dateTime(),
            'is_published' => fake()->boolean(),
            'views_count' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
