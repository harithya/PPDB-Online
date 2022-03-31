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
