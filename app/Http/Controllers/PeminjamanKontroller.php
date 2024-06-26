<?php

namespace App\Http\Controllers;


use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PeminjamanKontroller extends Controller
{

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama-peminjam' => 'required',
            'no-telpon-peminjam' => 'required',
            'email' => 'required',
            'Judul' => 'required',
            'tanggal-peminjam' => 'required'
        ]);

        $peminjam = new Peminjaman;
        $datas = $request->all();

        $peminjam->nama_peminjam = $datas['nama-peminjam'];
        $peminjam->no_telp_peminjam = $datas['no-telpon-peminjam'];
        $peminjam->email_peminjam = $datas['email'];
        $peminjam->id_judul_buku = $datas['Judul'];
        $peminjam->tanggal_dipinjam = $datas['tanggal-peminjam'];
        $peminjam->tanggal_dikembalikan = Carbon::now()->addDays(30);
        $peminjam->save();
        return redirect('/peminjaman');
    }

    public function show()
    {
        $table = DB::table('peminjaman')
            ->join('buku', 'peminjaman.id_judul_buku', '=', 'buku.id')
            ->select('peminjaman.id', 'peminjaman.nama_peminjam', 'peminjaman.no_telp_peminjam', 'peminjaman.email_peminjam', 'buku.judul', 'peminjaman.tanggal_dipinjam', DB::raw('DATE(peminjaman.tanggal_dikembalikan) as tanggal_dikembalikan'), 'peminjaman.status_peminjaman')
            ->get();
        $title = "Peminjaman";
        return compact('table', 'title');
    }

    public function delete($id): RedirectResponse
    {
        $peminjaman = Peminjaman::find($id);
        if ($peminjaman) {
            $peminjaman->delete();
        }
        return redirect('/peminjaman');
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([]);
        $affected = Peminjaman::find($id);

        return redirect('');
    }
}
