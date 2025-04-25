<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PropertiFactory extends Factory
{
    public function definition(): array
    {
        $tipeProperti = ['Rumah', 'Apartemen', 'Ruko', 'Tanah', 'Villa', 'Kost'];
        $status = ['tersedia', 'terjual', 'tersewa'];

        return [
            'nama_properti' => fake()->words(3, true) . ' Property',
            'deskripsi' => fake()->paragraphs(3, true),
            'lokasi' => fake()->address(),
            'whatsapp_pemilik' => '08' . fake()->numerify('##########'),
            'pemilik' => fake()->name(),
            'tipe_properti' => fake()->randomElement($tipeProperti),
            'status' => fake()->randomElement($status),
        ];
    }
}
