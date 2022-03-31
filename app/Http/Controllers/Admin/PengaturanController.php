<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::find(1);
        return view("admin.pengaturan.index", compact("pengaturan"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'waktu_selesai' => 'required',
            'kuota' => 'required'
        ]);

        Pengaturan::updateOrCreate(['id' => 1], $request->all());
        return response()->json([
            'status' => true,
            'message'  => "Berhasil mengubah data"
        ]);
    }
}
