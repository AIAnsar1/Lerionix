<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'photo' => $this->faker->imageUrl(200, 200, 'people', true),
            'profession' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(3),
            'stars' => $this->faker->numberBetween(1, 5),
            'socials_networks' => json_encode([
                'telegram' => $this->faker->url(),
                'instagram' => $this->faker->url(),
                'x' => $this->faker->url(),
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
