<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BookController extends Controller
{
    public function store(Request $request): Request
    {
        $request->validate([
            'judul' => 'required|max:255',
            'nama_penulis' => 'required|max:255',
            'isbn' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'tahun_terbit' => 'required'
        ]);
        $kategoris = new Kategori;
        $datas = $request->all();
        /*

         */
        $book = new Book;
        $book->judul = $datas['judul'];
        $book->nama_penulis = $datas['nama_penulis'];
        $book->isbn = $datas['isbn'];
        $book->penerbit = $datas['penerbit'];
        $book->tahun_terbit = $datas['tahun_terbit'];
        $book->to_kategori()->associate($kategoris);
        $book->save();
        return $request;
    }

//    public function update(Request $request, $id): View
//    {
////        $bookToFind = Book::find($id);
//        $books = $request->all();
//        $booksAffected = Book::find($id);
//        $booksAffected->judul = $books['judul'];
//        $booksAffected->save();
//        return view('');
//    }
//
    public function delete(Request $request, $id)
    {

    }

    public function show(): View
    {
        $books = DB::table('buku')->get();
        return view('', ['books' => $books]);
    }
}
