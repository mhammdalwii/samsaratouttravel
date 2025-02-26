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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Superior 01, Superior 02, dll.
            $table->string('category'); // Superior
            $table->string('location'); // Labuan Bajo
            $table->integer('duration'); // Lama perjalanan
            $table->string('language'); // Bahasa yang digunakan
            $table->decimal('price', 10, 2); // Harga per orang
            $table->text('description'); // Deskripsi perjalanan
            $table->json('images'); // Gambar kapal
            $table->json('itinerary'); // Rencana perjalanan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
