<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pekerjaan;
use App\Models\Penghasilan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Siswa::select("siswa.*", "alamat.alamat", "kecamatan.kecamatan", "kota.kota")
                ->leftJoin("alamat", "alamat.siswa_id", "=", "siswa.id")
                ->leftJoin("kecamatan", "kecamatan.id", "=", "alamat.kecamatan_id")
                ->leftJoin("kota", "kota.id", "=", "kecamatan.kota_id")
                ->leftJoin("orang_tua", "orang_tua.siswa_id", "=", "siswa.id")
                ->where(function ($query) use ($request) {
                    if ($request->status !== null) {
                        $query->where("siswa.status", $request->status);
                    }
                    if ($request->pekerjaan) {
                        $query->where("orang_tua.pekerjaan_id", $request->pekerjaan);
                    }
                    if ($request->penghasilan) {
                        $query->where("orang_tua.penghasilan_id", $request->penghasilan);
                    }
                })
                ->get())
                ->addIndexColumn()
                ->toJson();
        }
        $data['pekerjaan'] = Pekerjaan::all();
        $data['penghasilan'] = Penghasilan::all();
        return view("admin.siswa.index", $data);
    }

    public function show($id)
    {
        $siswa = Siswa::with([
            'orangTua' => function ($query) {
                return $query->leftJoin("pekerjaan", "pekerjaan.id", "=", "orang_tua.pekerjaan_id")
                    ->leftJoin("penghasilan", "penghasilan.id", "=", "orang_tua.penghasilan_id");
            },
            'alamat' => function ($query) {
                return $query->leftJoin("kecamatan", "kecamatan.id", "=", "alamat.kecamatan_id")
                    ->leftJoin("kota", "kota.id", "=", "kecamatan.kota_id")
                    ->leftJoin("provinsi", "provinsi.id", "=", "kota.provinsi_id");
            },
            'buktiPembayaran',
            'dokumen'
        ])
            ->where("id", $id)
            ->first();
        return view("admin.siswa.show", compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        Siswa::find($id)->update(['status' => $request->status]);
        return redirect()->to("admin/siswa")->with("success", "Status siswa berhasil diubah");
    }
}
