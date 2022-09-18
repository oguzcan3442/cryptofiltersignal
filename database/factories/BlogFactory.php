<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'desc' => $this->faker->paragraph(10),
            'category' => 'Uncategorized',
            'banner_path' => "https://picsum.photos/1000/500",
            'thumb_path' => "https://picsum.photos/300/200",
            'created_at' => now(),
            'created_at' => now(),
        ];
    }
}
