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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key 
            $table->string('title'); // Judul buku 
            $table->string('author'); // Nama penulis 
            $table->string('publisher'); // Nama penerbit 
            $table->year('year_published'); // Tahun terbit 
            $table->boolean('available')->default(true); // Status tersedia (Ya/Tidak) 
            $table->timestamps(); // created_at dan updated_at otomatis 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};