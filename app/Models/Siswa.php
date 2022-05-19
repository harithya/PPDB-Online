<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Authenticatable
{
    use HasFactory;

    protected $table = "siswa";

    protected $guarded = [];

    public $timestamps = false;

    public function orangTua()
    {
        return $this->hasOne(OrangTua::class);
    }

    public function alamat()
    {
        return $this->hasOne(Alamat::class);
    }

    public function buktiPembayaran()
    {
        return $this->hasOne(BuktiPembayaran::class);
    }

    public function dokumen()
    {
        return $this->hasOne(Dokumen::class);
    }

    public function scopeDetail($query, $request)
    {
        return $query->select("siswa.*", "alamat.alamat", "kecamatan.kecamatan", "kota.kota", "penghasilan.penghasilan", "pekerjaan.pekerjaan", "siswa.tanggal")
            ->leftJoin("alamat", "alamat.siswa_id", "=", "siswa.id")
            ->leftJoin("kecamatan", "kecamatan.id", "=", "alamat.kecamatan_id")
            ->leftJoin("kota", "kota.id", "=", "kecamatan.kota_id")
            ->leftJoin("orang_tua", "orang_tua.siswa_id", "=", "siswa.id")
            ->leftJoin("penghasilan", "orang_tua.penghasilan_id", "=", "penghasilan.id")
            ->leftJoin("pekerjaan", "pekerjaan.id", "=", "orang_tua.pekerjaan_id")
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
            });
    }
}
