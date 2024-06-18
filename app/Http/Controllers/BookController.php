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
        return redirect('/daftarbuku');
    }

    public function update(Request $request, $id): View
    {
        $request->validate([]);
        $books = $request->all();
        $booksAffected = Book::find($id);
        $booksAffected->judul = $books['judul'];
        $booksAffected->save();
        return view('/daftarbuku');
    }

    public function delete($id): RedirectResponse
    {
        $book = Book::find($id);

        if ($book) {
            $book->delete();
            return redirect('/daftarbuku')->with('Sukses');
        } else {
            return redirect('/daftarbuku');
        }
    }
}
