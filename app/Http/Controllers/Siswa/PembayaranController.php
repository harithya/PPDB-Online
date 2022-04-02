<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\BuktiPembayaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $bukti = BuktiPembayaran::where("siswa_id", user("guest")->id)->first();
        return view("siswa.pembayaran.index", compact('bukti'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required|string',
            'no_rekening' => 'required|numeric|min:5',
            'bank_pengirim' => 'required|string',
            'jumlah' => 'required|numeric|min:3',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $bukti_pembayaran = $request->file("bukti_pembayaran")->store("public/bukti");
        $bukti_pembayaran = str_replace("public/", "", $bukti_pembayaran);

        $data = array_merge($request->except(['bukti_pembayaran']), [
            'img_bukti' => $bukti_pembayaran,
            'tanggal' => now(),
        ]);

        Siswa::find(user("guest")->id)->update(['status' => PENGECEKAN]);
        BuktiPembayaran::updateOrCreate(['siswa_id' => user("guest")->id], $data);
        return response()->json(['status' => true, "message" => "Berhasil mengubah data"]);
    }
}
