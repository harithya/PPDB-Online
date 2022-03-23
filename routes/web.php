<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagementUserController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("admin")->group(function () {
    Route::get("dashboard", [DashboardController::class, "index"])->name("dashboard.index");
    Route::resource("management-user", ManagementUserController::class)->except(['create', 'show', 'update']);
    Route::controller(SiswaController::class)->prefix("mahasiswa")->group(function () {
        Route::get("/", "index")->name("siswa.index");
    });

    Route::controller(LoginController::class)->prefix("login")->group(function () {
        Route::get("/", "index")->name("login.index");
        Route::post("/", "store")->name("login.store");
    });
});
