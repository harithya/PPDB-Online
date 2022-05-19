<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("siswa.auth.login");
    }

    public function loginStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string|min:5',
            'password' => 'required|string|min:5',
        ]);

        if (Auth::guard("guest")->attempt($request->except('_token'))) {
            return redirect()->intended('/siswa/home');
        } else {
            return back()->with(['message' => 'Username atau password salah']);
        }
    }

    public function register()
    {
        return view("siswa.auth.register");
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:3',
            'email' => 'required|email|unique:siswa',
            'password' => 'required|string|min:6',
        ]);
        $check = Siswa::orderBy("id", "desc")->first();

        Siswa::create(array_merge(
            $request->except("password"),
            [
                'password' => bcrypt($request->password),
                'id' => $check ? $check->id + 1 : 1,
                'tanggal' => now()
            ]
        ));

        Notifikasi::create([
            'tanggal' => now(),
            'text' => 'Ada pendaftar baru bernama ' . $request->nama,
            'status' => AUTH_PENDAFTARAN
        ]);
        return redirect('/')->with('message', 'Selamat akun anda berhasil dibuat');
    }

    public function logout()
    {
        Auth::guard("guest")->logout();
        return redirect()->to("/");
    }
}
