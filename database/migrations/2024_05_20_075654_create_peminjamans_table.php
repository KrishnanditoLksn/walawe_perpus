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
            $table->id()->primary();
            $table->string('nama_peminjam');
            $table->char('no_telp_peminjam', '12');
            $table->string('email_peminjam');
            $table->date('tanggal_dipinjam')->nullable();
            $table->timestamp('tanggal_dikembalikan')->useCurrent();
            $table->string('status_peminjaman')->default('Dipinjam');
            $table->timestamps();
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
