<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'nama_kategori' => 'Technology'],
            ['id' => 2, 'nama_kategori' => 'Science'],
            ['id' => 3, 'nama_kategori' => 'Health'],
        ];

        DB::table('kategori')->insert($categories);
    }
}
