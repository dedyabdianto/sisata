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
            $table->string('foto_kadis');
            $table->string('visi');
            $table->string('misi');
            $table->string('foto_struktur');
            $table->string('sambutan');
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