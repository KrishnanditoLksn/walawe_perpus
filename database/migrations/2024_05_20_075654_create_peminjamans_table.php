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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman')->primary();
            $table->unsignedBigInteger('id_copy_buku');
            $table->string('nama_peminjam');
            $table->char('no_telp_peminjam', '12');
            $table->string('email_peminjam');
            $table->timestamp('tanggal_dipinjam')->nullable();
            $table->timestamp('tanggal_dikembalikan')->nullable();
            $table->timestamps();
            $table->foreign('id_copy_buku')->references('id')->on('copy_books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
