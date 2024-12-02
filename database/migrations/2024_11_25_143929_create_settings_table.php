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
        Schema::create('settings', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama_web')->nullable();
            $table->string('tagline')->nullable();
            $table->text('about')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tlp')->nullable();
            $table->string('logo')->nullable();
            $table->string('link_fb')->nullable();
            $table->string('link_twt')->nullable();
            $table->string('link_ig')->nullable();
            $table->string('link_yt')->nullable();
            $table->string('link_wa')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
