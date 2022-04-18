<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['notifikasi'] = Notifikasi::orderBy("id", "desc")
            ->limit(5)
            ->get();
        $data['semuanya'] = Siswa::count();
        $data['diterima'] = Siswa::where("status", DITERIMA)->count();
        $data['ditolak'] = Siswa::where("status", DITOLAK)->count();
        $data['pengecekan'] = Siswa::where("status", PENGECEKAN)->count();
        return view("admin.dashboard.index", $data);
    }
}
