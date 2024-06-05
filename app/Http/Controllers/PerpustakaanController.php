<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
    public function show(): View
    {
        $posts = Kategori::all();
        $books = DB::table('kategori')
            ->join('buku', 'buku.id_kategori_buku', '=', 'kategori.id')
            ->select('kategori.id', 'kategori.nama_kategori', 'buku.judul' , 'buku.id')
            ->get();
        $title = 'Laporan';
        return view('Home', compact('posts', 'books', 'title'));
    }
}
