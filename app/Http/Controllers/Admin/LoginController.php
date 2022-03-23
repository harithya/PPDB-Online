<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:4',
            'password' => 'required|string|min:4'
        ]);

        if (Auth::attempt($request->except(['_token']), $request->remember)) {
            return redirect()->to("admin/dashboard");
        }

        return back()->with(['message' => 'Username atau password salah']);
    }
}
