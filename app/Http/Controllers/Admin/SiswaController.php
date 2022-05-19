<?php

namespace App\Http\Controllers\Admin;

use App\Models\Siswa;
use App\Models\Pekerjaan;
use App\Models\Penghasilan;
use App\Exports\SiswaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Siswa::detail($request)->get())
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

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return response()->json([
            'status' => true,
            'message'  => "Berhasil menghapus data"
        ]);
    }

    public function update(Request $request, $id)
    {
        Siswa::find($id)->update(['status' => $request->status]);
        return redirect()->to("admin/siswa")->with("success", "Status siswa berhasil diubah");
    }

    public function export(Request $request)
    {
        // $data['siswa'] = Siswa::detail($request)->get();
        // return view("exports.siswa", $data);
        return Excel::download(new SiswaExport($request), 'siswa.xlsx');
        // return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
}
