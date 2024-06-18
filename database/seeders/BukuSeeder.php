<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['id' => 1, 'judul' => 'Antok Jarkom', 'nama_penulis' => 'Agung', 'isbn' => '31231', 'penerbit' => 'Erlangga', 'tahun_terbit' => 2003, 'id_kategori_buku' => 2]
        ];
        DB::table('buku')->insert($books);
    }
}
