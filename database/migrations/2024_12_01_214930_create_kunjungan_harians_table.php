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
        Schema::create('kunjungan_harians', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('wisata_id')->constrained('wisatas')->onDelete('restrict');
            $table->date('tanggal_kunjungan');
            $table->integer('jumlah_kunjungan')->default(0);
            $table->timestamps();

            $table->unique(['wisata_id', 'tanggal_kunjungan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan_harians');
    }
};
