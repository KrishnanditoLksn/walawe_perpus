<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
    public function show()
    {
        $posts = Kategori::all();
        $books = DB::table('kategori')
            ->join('buku', 'buku.id_kategori_buku', '=', 'kategori.id')
            ->select('kategori.id', 'kategori.nama_kategori', 'buku.judul', 'buku.id', 'buku.nama_penulis', 'buku.isbn', 'buku.penerbit', 'buku.tahun_terbit')
            ->get();
        $title = 'Daftar Buku';
        return compact('posts', 'books', 'title');
    }
}
