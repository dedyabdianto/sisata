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
        Schema::create('profils', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('nama_kadis');
            $table->string('nip');
            $table->foreignUlid('pangkat_golongan_id')->constrained('pangkat_golongan')->onDelete('cascade');
            $table->string('foto_kadis');
            $table->text('visi');
            $table->text('misi');
            $table->string('foto_struktur');
            $table->text('sambutan');
            $table->foreignUlid('user_id')->constrained('users')->onDelete('cascade'); // foreign key()
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
