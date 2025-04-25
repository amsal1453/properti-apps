<?php

namespace Database\Factories;

use App\Models\Properti;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermintaanInfoFactory extends Factory
{
    public function definition(): array
    {
        $status = ['pending', 'diproses', 'selesai', 'dibatalkan'];

        return [
            'nama' => fake()->name(),
            'email' => fake()->safeEmail(),
            'pesan' => fake()->paragraph(),
            'status' => fake()->randomElement($status),
            'tanggal_kirim' => fake()->dateTimeBetween('-3 months', 'now'),
            'properti_id' => Properti::factory(),
        ];
    }
}
