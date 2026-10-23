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
    Schema::create('traditional_music', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('region');
        $table->string('instrument');
        $table->string('artist');
        $table->year('release_year');
        $table->string('audio_file')->nullable(); // Untuk gambar/poster produk
        $table->text('description');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traditional_music');
    }
};
