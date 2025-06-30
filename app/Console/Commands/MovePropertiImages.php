<?php

namespace App\Console\Commands;

use App\Models\Properti;
use App\Models\GambarProperti;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MovePropertiImages extends Command
{
    protected $signature = 'properti:move-images';

    protected $description = 'Move properti images to the correct location';

    public function handle()
    {
        $this->info('Moving main images...');

        // Process main images
        $properties = Properti::whereNotNull('gambar_utama')->get();

        foreach ($properties as $property) {
            $oldPath = $property->gambar_utama;

            // Check if this is a path from storage
            if (Str::startsWith($oldPath, 'properti-images/')) {
                // Extract filename
                $filename = basename($oldPath);
                $newPath = 'utama/' . $filename;

                // Try to copy from storage to the new location
                if (Storage::disk('public')->exists($oldPath)) {
                    $fileContents = Storage::disk('public')->get($oldPath);
                    Storage::disk('properti-images')->put($newPath, $fileContents);

                    // Update the database record
                    $property->gambar_utama = $newPath;
                    $property->save();

                    $this->info("Moved image: $oldPath -> $newPath");
                } else {
                    $this->warn("File not found: $oldPath");
                }
            } else {
                $this->info("Skipping file with unusual path: $oldPath");
            }
        }

        // Process gallery images
        $this->info('Moving gallery images...');
        $galleryImages = GambarProperti::all();

        foreach ($galleryImages as $image) {
            $oldPath = $image->file_path;

            // Check if this is a path from storage
            if (Str::startsWith($oldPath, 'properti-images/')) {
                // Extract filename
                $filename = basename($oldPath);
                $newPath = 'galeri/' . $filename;

                // Try to copy from storage to the new location
                if (Storage::disk('public')->exists($oldPath)) {
                    $fileContents = Storage::disk('public')->get($oldPath);
                    Storage::disk('properti-images')->put($newPath, $fileContents);

                    // Update the database record
                    $image->file_path = $newPath;
                    $image->save();

                    $this->info("Moved image: $oldPath -> $newPath");
                } else {
                    $this->warn("File not found: $oldPath");
                }
            } else {
                $this->info("Skipping file with unusual path: $oldPath");
            }
        }

        $this->info('Done moving images.');

        return Command::SUCCESS;
    }
}
