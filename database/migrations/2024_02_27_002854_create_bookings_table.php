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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('judul');
            $table->date('tanggal_pinjam')->default(now());
            $table->date('tanggal_kembali')->default(now()->addWeek());
            $table->enum('status', ['Diajukan', 'Diterima', 'Ditolak', 'Dikembalikan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
