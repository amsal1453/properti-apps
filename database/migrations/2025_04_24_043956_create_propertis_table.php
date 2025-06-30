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
        Schema::create('propertis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_properti');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->string('whatsapp_pemilik');
            $table->string('pemilik');
            $table->string('tipe_properti');
            $table->string('status');
            $table->integer('harga');
            $table->enum('satuan_harga', ['juta', 'miliar', 'perbulan', 'pertahun'])->default('juta');
            $table->integer('jumlah_kamar')->default(0);
            $table->integer('jumlah_kamar_mandi')->default(0);
            $table->integer('jumlah_parkir')->default(0);
            $table->integer('luas_bangunan')->default(0);
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->boolean('is_promo')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propertis');
    }
};
