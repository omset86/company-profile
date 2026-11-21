<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'tagline' => fake()->regexify('[A-Za-z0-9]{255}'),
            'description' => fake()->text(),
            'address' => fake()->text(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'logo' => fake()->word(),
            'facebook' => fake()->word(),
            'instagram' => fake()->word(),
            'linkedin' => fake()->word(),
            'twitter' => fake()->word(),
            'youtube' => fake()->word(),
        ];
    }
}
