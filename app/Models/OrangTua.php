<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;

    protected $table = "orang_tua";

    protected $guarded = ['id'];

    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
