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
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isbn' => 'required',
            'penulis' => 'required',
            'tahunTerbit' => 'required',
            'publisher' => 'required',
        ]);

        $book = Book::findOrFail($id);
        $book->judul = $request->judul;
        $book->isbn = $request->isbn;
        $book->nama_penulis = $request->penulis;
        $book->penerbit = $request->publisher;
        $book->tahun_terbit = $request->tahunTerbit;
        $book->id_kategori_buku = $request->kategori;
        $book->save();

        // Redirect with success message or to the page with book list
        return redirect('/daftarbuku')->with('success', 'Buku berhasil diperbarui.');
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
