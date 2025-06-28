<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten');
            $table->text('excerpt')->nullable();
            $table->string('kategori');
            $table->string('gambar')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('admin_id')->constrained('users')->cascadeOnDelete();
            $table->date('tanggal_posting')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
