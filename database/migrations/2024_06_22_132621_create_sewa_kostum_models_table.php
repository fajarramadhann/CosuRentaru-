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
        Schema::create('sewa_kostum_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kostum_id')->constrained('costum_models')->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('no_hp');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->text('alamat_lengkap');
            $table->date('tgl_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa_kostum_models');
    }
};
