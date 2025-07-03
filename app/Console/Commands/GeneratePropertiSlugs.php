<?php

namespace App\Console\Commands;

use App\Models\Properti;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GeneratePropertiSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-properti-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs for all existing properties';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to generate slugs for properties...');

        $properties = Properti::all();
        $count = 0;

        foreach ($properties as $property) {
            if (empty($property->slug)) {
                $property->slug = Properti::generateUniqueSlug($property->nama_properti);
                $property->save();
                $count++;

                $this->line("Generated slug '{$property->slug}' for property: {$property->nama_properti}");
            }
        }

        $this->info("Completed! Generated slugs for {$count} properties.");

        return Command::SUCCESS;
    }
}
