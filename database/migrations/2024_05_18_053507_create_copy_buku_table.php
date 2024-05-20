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
        Schema::create('copy_books', function (Blueprint $table) {
            $table->id()->primary();
            $table->bigInteger('id_buku')->unsigned();
            $table->integer('no_copy_buku')->unsigned();
            $table->foreign('id_buku')->references('id_buku')->on('buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copy_buku');
    }
};
