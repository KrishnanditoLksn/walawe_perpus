<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        $peminjaman = [
            [
                'nama_peminjam' => 'Peminjam Aldi',
                'no_telp_peminjam' => '081234567890',
                'email_peminjam' => 'peminjam1@example.com',
                'id_judul_buku' => 1,
                'tanggal_dipinjam' => Carbon::now(),
                'tanggal_dikembalikan' => Carbon::now()->addDays(30)->format('Y-m-d'),
                'status_peminjaman' => 'Dipinjam',
            ],
            // Anda dapat menambahkan data peminjaman lainnya di sini
        ];
        DB::table('peminjaman')->insert($peminjaman);
    }
}
