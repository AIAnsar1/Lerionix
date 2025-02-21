<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tags>
 */
class TagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $titles = null;

        if ($titles === null) {
            $titles = collect([
                'PHP', 'C++', 'C', 'Golang', 'Rust', 'Actix-Web',
                'Django', 'FastAPI', 'Rocket', 'Laravel', 'Gin',
                'Gorilla', 'Drogon-HTTP'
            ])->shuffle();
        }

        return [
            // 'title' => $this->faker->randomElement(['PHP', 'C++', 'C', 'Golang', 'Rust', 'Actix-Web', 'Django', 'FastAPI', 'Rocket', 'Laravel', 'Gin', 'Gorilla', 'Drogon-HTTP']),
            'title' => $titles->pop(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
