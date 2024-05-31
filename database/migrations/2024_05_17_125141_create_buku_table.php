<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('judul');
            $table->string('nama_penulis');
            $table->char('isbn');
            $table->string('penerbit');
            $table->year('tahun_terbit');
            $table->unsignedBigInteger('id_kategori_buku');
            $table->foreign('id_kategori_buku')->references('id')->on('kategori');
            $table->timestamps();
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
