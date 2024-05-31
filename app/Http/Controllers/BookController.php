<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required',
            'isbn' => 'required',
            'penulis' => 'required',
            'tahunTerbit' => 'required',
            'publisher' => 'required'
        ]);
        $datas = $request->all();
        $book = new Book;
        $book->judul = $datas['judul'];
        $book->nama_penulis = $datas['penulis'];
        $book->isbn = $datas['isbn'];
        $book->penerbit = $datas['publisher'];
        $book->tahun_terbit = $datas['tahunTerbit'];
        $book->id_kategori_buku = $datas['kategori'];
        $book->save();
        return redirect('/');
    }

    public function update(Request $request, $id): View
    {
        $request->validate([

        ]);
        $books = $request->all();
        $booksAffected = Book::find($id);
        $booksAffected->judul = $books['judul'];
        $booksAffected->save();
        return view('');
    }

    public function delete(Request $request, $id)
    {
    }

    public function show(): View
    {
        return view('Home', ['title' => 'Buku', 'books' => Book::all()]);
    }
}
