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
            $table->unsignedBigInteger('properti_id');
            $table->string('file_path');
            $table->string('keterangan')->nullable();
            $table->foreign('properti_id')->references('id')->on('propertis')->onDelete('cascade');
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
