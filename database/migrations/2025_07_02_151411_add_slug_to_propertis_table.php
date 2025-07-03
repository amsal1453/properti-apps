<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Properti;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First add the column without unique constraint
        Schema::table('propertis', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('nama_properti');
        });

        // Update existing records with slugs
        $properties = Properti::all();
        foreach ($properties as $property) {
            $baseSlug = Str::slug($property->nama_properti);
            $slug = $baseSlug;
            $counter = 1;

            // Make sure the slug is unique
            while (Properti::where('slug', $slug)->where('id', '!=', $property->id)->exists()) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $property->slug = $slug;
            $property->save();
        }

        // Now add the unique constraint
        Schema::table('propertis', function (Blueprint $table) {
            $table->unique('slug');
            $table->string('slug')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('propertis', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
