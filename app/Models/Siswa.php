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
}
