<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BookController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required',
            'nama_penulis' => 'required',
            'isbn' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required'
        ]);
        $datas = $request->all();
        /*

         */
        $book = new Book;
        $book->judul = $datas['judul'];
        $book->nama_penulis = $datas['penulis'];
        $book->isbn = $datas['isbn'];
        $book->penerbit = $datas['publisher'];
        $book->tahun_terbit = $datas['tahunTerbit'];
        $book->save();
        return redirect('/daftarbuku');
    }

    public function update(Request $request, $id): View
    {
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
