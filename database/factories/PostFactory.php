<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'subtitle' => fake()->sentence(7),
            'user_id' => rand(1,11),
            'content' => fake()->paragraph,
            'tag' => fake()->sentence(),
            'facebook' => 'http://127.0.0.1:8000/',
            'instagram' => 'http://127.0.0.1:8000/',
            'twitter' => 'http://127.0.0.1:8000/',
            'linkedin' => 'http://127.0.0.1:8000/',
            'image' => fake()->randomElement(array(1, 3,5,6,7)),
        ];
    }
}
