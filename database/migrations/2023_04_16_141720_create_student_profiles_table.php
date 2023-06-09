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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('npm');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('jalur_masuk');
            $table->string('beasiswa');
            $table->string('pendapatan_orangtua');
            $table->string('uang_saku_satu_bulan');
            $table->string('index_prestasi')->nullable();
            $table->string('index_prestasi_kumulatif')->nullable();
            $table->enum('status', ['validasi', 'Belum Divalidasi'])->nullable()->default('Belum Divalidasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
