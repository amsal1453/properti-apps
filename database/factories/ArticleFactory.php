<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(),
            'konten' => fake()->paragraphs(5, true),
            'admin_id' => User::factory(),
            'tanggal_posting' => fake()->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
