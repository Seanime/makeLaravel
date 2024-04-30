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
        Schema::create('karyawan_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('departemen'); // Tambah kolom departemen
            $table->string('alamat'); // Tambah kolom alamat
            $table->string('jenis_kelamin'); // Tambah kolom jenis_kelamin
            $table->date('tanggal_lahir'); // Tambah kolom tanggal_lahir
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan_tabel');
    }
};
