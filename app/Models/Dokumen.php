<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = "dokumen";

    protected $guarded = ['id'];

    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
