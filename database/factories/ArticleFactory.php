<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'short_desc' => fake()->sentence(12),
            'content' => fake()->paragraphs(4, true),
            'preview_image' => fake()->randomElement(['preview.jpg', 'preview_2.jpg']),
        ];
    }
}
