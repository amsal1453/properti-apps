<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Properti;
use App\Models\GambarProperti;
use App\Models\PermintaanInfo;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 5 users
        User::factory(5)->create();

        // Create 20 properties
        Properti::factory(20)
            ->has(
                GambarProperti::factory()
                    ->count(4) // 4 images per property
            )
            ->has(
                PermintaanInfo::factory()
                    ->count(3) // 3 info requests per property
            )
            ->color(fn(string $state): string => match ($state) {
                'tersedia' => 'success',
                'terjual' => 'danger',
                'disewa' => 'warning',
            })
            ->create();

        // Create 10 articles
        Article::factory(10)->create([
            'admin_id' => User::inRandomOrder()->first()->id,
        ]);
    }
}
