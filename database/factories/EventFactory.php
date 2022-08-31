<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(7),
            'description' => fake()->sentence(10),
            'location' => fake()->streetAddress,
            'facebook' => 'http://127.0.0.1:8000/',
            'instagram' => 'http://127.0.0.1:8000/',
            'twitter' => 'http://127.0.0.1:8000/',
            'linkedin' => 'http://127.0.0.1:8000/',
            'image' => fake()->image,
        ];
    }
}
