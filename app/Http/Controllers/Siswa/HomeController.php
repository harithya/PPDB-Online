<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Alamat;
use App\Models\OrangTua;
use App\Models\Pekerjaan;
use App\Models\Penghasilan;
use App\Models\Provinsi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['siswa'] = Siswa::find(user("guest")->id);
        $data['pekerjaan'] = Pekerjaan::all();
        $data['penghasilan'] = Penghasilan::all();
        $data['orangTua'] = OrangTua::where("siswa_id", user("guest")->id)->first();
        $data['provinsi'] = Provinsi::all();
        $data['alamat'] = Alamat::where("siswa_id", user("guest")->id)
            ->leftJoin("kecamatan", "kecamatan.id", "=", "alamat.kecamatan_id")
            ->leftJoin("kota", "kota.id", "=", "kecamatan.kota_id")
            ->first();
        return view("siswa.home.index", $data);
    }

    public function identitas(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:5|numeric|unique:siswa,nik,' . user('guest')->id . ',id',
            'nisn' => 'required|min:5|numeric|unique:siswa,nisn,' . user('guest')->id . ',id',
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required|min:4',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required|min:4|string'
        ]);

        Siswa::updateOrCreate(['id' => user('guest')->id], $request->all());
        return response()->json(['status' => true, "message" => "Berhasil mengubah profile"]);
    }

    public function orangTua(Request $request)
    {
        $request->validate([
            'nama_ortu' => 'required|string',
            'no_kontak' => 'required|min:4|numeric',
            'status' => 'required',
            'pekerjaan_id' => 'required',
            'penghasilan_id' => 'required'
        ]);

        OrangTua::updateOrCreate(
            ['siswa_id' => user("guest")->id],
            array_merge(
                $request->except("nama_ortu"),
                ['nama' => $request->nama_ortu]
            )
        );
        return response()->json(['status' => true, "message" => "Berhasil mengubah orang tua"]);
    }

    public function alamat(Request $request)
    {
        $request->validate([
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecamatan_id' => 'required',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'kode_pos' => 'required|numeric',
            'alamat' => 'required|min:5'
        ]);
        Alamat::updateOrCreate(['siswa_id' => user('guest')->id], $request->all());
        return response()->json(['status' => true, "message" => "Berhasil mengubah alamat"]);
    }
}
