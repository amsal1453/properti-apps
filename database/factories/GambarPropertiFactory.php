<?php

namespace Database\Factories;

use App\Models\Properti;
use Illuminate\Database\Eloquent\Factories\Factory;

class GambarPropertiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'properti_id' => Properti::factory(),
            'file_path' => fake()->imageUrl(640, 480, 'property'),
            'keterangan' => fake()->optional()->sentence(),
        ];
    }
}
