<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data['notifikasi'] = Notifikasi::orderBy("id", "desc")
            ->limit(7)
            ->get();
        $data['semuanya'] = Siswa::count();
        $data['diterima'] = Siswa::where("status", DITERIMA)->count();
        $data['ditolak'] = Siswa::where("status", DITOLAK)->count();
        $data['pengecekan'] = Siswa::where("status", PENGECEKAN)->count();
        if ($request->ajax()) {
            $chart  = Siswa::selectRaw("IF(isNull(status),0,COUNT(*)) as jumlah, bulan.nama as bulan,status")
                ->whereIn("status", [DITERIMA, DITOLAK])
                ->rightJoin("bulan", DB::raw("DATE_FORMAT(tanggal,'%M')"), "=", "bulan.nama")
                ->groupBy(DB::raw("DATE_FORMAT(tanggal,'%M')"))
                ->groupBy("status")
                ->orderBy("tanggal", "asc")
                ->get();
            return response()->json(collect($chart)->groupBy("bulan")->all());
        }
        return view("admin.dashboard.index", $data);
    }
}
