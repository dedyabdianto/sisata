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
        Schema::create('wisatas', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->constrained('users')->onDelete('cascade'); 
            $table->foreignUlid('kategori_wisata_id')->constrained('kategori_wisatas')->onDelete('cascade');
            $table->string('nama_wisata');
            $table->string('alamat');
            $table->text('deskripsi');
            $table->string('foto');
            $table->string('harga');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('link_maps');
            $table->string('status')->default('aktif');
            $table->string('rating')->default('0');
            $table->string('jumlah_rating')->default('0');
            $table->string('jumlah_review')->default('0');
            $table->string('jumlah_like')->default('0');
            $table->string('jumlah_unlike')->default('0');
            $table->text('komentar')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisatas');
    }
};
