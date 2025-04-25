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
            $table->string('nama');
            $table->string('email');
            $table->text('pesan')->nullable();
            $table->string('status')->default('pending');
            $table->date('tanggal_kirim');
            $table->unsignedBigInteger('properti_id');
            $table->timestamps();

            $table->foreign('properti_id')->references('id')->on('propertis')->onDelete('cascade');
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
