<?php

use App\Models\Pengaturan;
use Illuminate\Support\Carbon;

function user($guard = 'web')
{
    return auth()->guard($guard)->user();
}

function setting()
{
    return Pengaturan::find(1);
}

function dateTime($date)
{
    $res = Carbon::parse($date)->locale("id");
    $res->settings(['formatFunction' => 'translatedFormat']);
    return $res->format('l, j F Y');
}

function formatDate($date)
{
    $res = Carbon::parse($date)->locale("id");
    $res->settings(['formatFunction' => 'translatedFormat']);
    return $res->format('j F Y');
}

function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 0, '', '.');
    return $hasil_rupiah;
}

function selected($value, $compare)
{
    $compare = request()->get($compare) === null ? '' : intval(request()->get($compare));

    if ($value === $compare) {
        return "selected";
    }
}
