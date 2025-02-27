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
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->integer('price');
            $table->integer('max_people');
            $table->string('image'); // Gambar utama
            $table->json('images')->nullable(); // Banyak gambar (JSON)
            $table->json('itinerary')->nullable(); // Itinerary (JSON)
            $table->json('includes')->nullable(); // Includes (JSON)
            $table->json('excludes')->nullable(); // Excludes (JSON)
            $table->json('departure')->nullable(); // Jadwal keberangkatan (JSON)
            $table->text('description')->nullable(); // Deskripsi
            $table->string('location')->nullable(); // Lokasi
            $table->string('year')->nullable(); // Tahun
            $table->string('speed')->nullable(); // Kecepatan
            $table->string('width')->nullable(); // Lebar
            $table->string('length')->nullable(); // Panjang
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boats');
    }
};
