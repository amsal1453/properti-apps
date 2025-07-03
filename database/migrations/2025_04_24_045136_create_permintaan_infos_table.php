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
        Schema::create('permintaan_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('properti_id')->nullable()->constrained('propertis')->nullOnDelete();
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_telepon')->nullable();
            $table->string('subjek')->nullable();
            $table->text('pesan');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_infos');
    }
};
