<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gambar_propertis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('properti_id')->constrained('propertis')->cascadeOnDelete();
            $table->string('file_path');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_propertis');
    }
};
