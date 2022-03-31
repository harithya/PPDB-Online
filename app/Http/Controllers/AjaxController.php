<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function kota($provinsiID)
    {
        return Kota::where('provinsi_id', $provinsiID)
            ->get();
    }

    public function kecamatan($kotaID)
    {
        return Kecamatan::where('kota_id', $kotaID)
            ->get();
    }
}
