<?php

namespace Database\Factories;

use App\Models\Tags;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'type' => $this->faker->randomElement(['Web', 'Mobile', 'Desktop', 'AI', 'Blockchain']),
            'photo' => $this->faker->imageUrl(640, 480, 'business', true),
            'description' => $this->faker->paragraph(),
            'project_link' => $this->faker->url(),
            'tags_id' => Tags::inRandomOrder()->first()->id ?? Tags::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
