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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('semester');
            $table->string('bidang');
            $table->string('capaian');
            $table->string('lingkup');
            $table->string('jumlah_peserta');
            $table->string('nama_kegiatan');
            $table->string('tanggal_kegiatan');
            $table->string('bukti');
            $table->string('link');
            $table->enum('status',['allow','deny'])->nullable()->default('deny');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
