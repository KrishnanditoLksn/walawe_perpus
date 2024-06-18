<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function registration(Request $request)
    {

    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $admin = Admin::find($id);
        if ($admin) {
            $admin->name = $request->input('name');
            $admin->save();
            return redirect('/admin')->with('status', 'Nama admin berhasil di ubah!');
        } else {
            return redirect('/admin')->with('error', 'Admin tidak ditemukan!');
        }
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/Home')->with('Status', 'Login basilar!');
        } else {
            return redirect('/login')->with('Error', 'Login gagal, silakan periksa kembali username dan password Anda.');
        }

    }

    public function delete(Request $request, $id): RedirectResponse
    {
        $admin = Admin::find($id);
        if ($admin) {
            $admin->delete();
            return redirect('/admin')->with('Status', 'Admin berhasil dihapus!');
        } else {
            return redirect('/admin')->with('Error', 'Admin tidak ditemukan!');
        }

    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'Logout berhasil!');

    }
}
