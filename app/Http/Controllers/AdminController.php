<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'email' => 'required|email'
        ]);

        $admin = new Admin();
        $admin->nama_admin = $request->input('username');
        $admin->password = Hash::make($request->input('password'));
        $admin->email = $request->input('email');
        $admin->save();
        return redirect('/login');
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
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);
        $datas = $request->except(['_token']);
        if (Auth::attempt($datas)) {
            $request->session()->regenerate();
            return redirect()->intended('/daftarbuku');
        }
        return back()->withErrors([
            'name' => 'The provided name do not match our records.',
            'password' => 'The provided password do not match our records.'
        ])->onlyInput('email');
    }

    public function delete(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'confirm' => 'required|in:yes'
        ]);

        $admin = Admin::find($id);
        if ($admin) {
            $admin->delete();
            return redirect('/admin')->with('status', 'Admin berhasil dihapus!');
        } else {
            return redirect('/admin')->with('error', 'Admin tidak ditemukan!');
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::logout(); // Logout admin
        return redirect('/login')->with('status', 'Anda telah logout!');
    }
}
