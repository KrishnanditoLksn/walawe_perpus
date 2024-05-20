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
            $table->bigInteger('id_member')->unsigned();
            $table->unsignedBigInteger('id_copy_buku');
            $table->timestamp('tanggal_dipinjam')->useCurrent();
            $table->timestamp('tanggal_dikembalikan')->useCurrent();
            $table->timestamps();
            $table->foreign('id_member')->references('id')->on('member');
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
