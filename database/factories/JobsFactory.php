<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            "title" => fake()->jobTitle(),
            "salary" => fake()->randomElement(["50,000", "100,000", "150,000"]),
            "location" => 'Remote',
            "schedule" => 'full-time',
            'url' => fake()->url(),
            'featured' => false
        ];
    }
}
