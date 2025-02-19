<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
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
            'socials_networks' => json_encode([
                'facebook' => $this->faker->url(),
                'twitter' => $this->faker->url(),
                'linkedin' => $this->faker->url(),
            ]),
            'questions' => json_encode([
                [
                    'question' => 'Как с вами связаться?', 
                    'answer' => 'Вы можете позвонить нам или написать на почту.'
                ],
                [
                    'question' => 'Каковы ваши часы работы?',
                    'answer' => 'Мы работаем с 9:00 до 18:00.'
                ],
            ]),
            'address' => $this->faker->address(),
            'map' => 'https://maps.google.com/?q=' . urlencode($this->faker->address()),
            'mail' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
