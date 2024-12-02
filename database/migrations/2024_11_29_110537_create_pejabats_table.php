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
        Schema::create('pejabats', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('jabatan_id')->constrained('jabatans')->onDelete('cascade');
            $table->foreignUlid('pangkat_golongan_id')->constrained('pangkat_golongans')->onDelete('cascade');
            $table->string('nama_pejabat');
            $table->string('pendidikan_terakhir');
            $table->text('riwayat_jabatan');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pejabats');
    }
};
