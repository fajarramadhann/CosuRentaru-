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
        Schema::create('costum_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kostum');
            $table->string('karakter');
            $table->string('anime');
            $table->enum('size', ['S', 'M', 'L', 'XL', 'XXL']);
            $table->decimal('price_per_day', 10, 2);
            $table->integer('quantity');
            $table->enum('status', ['Tersedia', 'Disewa', 'Tidak tersedia'])->default('Tersedia');
            $table->string('image_kostum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costum_models');
    }
};
