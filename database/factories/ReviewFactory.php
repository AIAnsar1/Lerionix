<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'photo' => $this->faker->image(),
            'company_title' => $this->faker->title(),
            'ratings' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->text(),
        ];
    }
}
