<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagementUserController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PengaturanController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Siswa\AuthController;
use App\Http\Controllers\Siswa\HomeController;
use App\Http\Controllers\Siswa\InformasiController;
use App\Http\Controllers\Siswa\PembayaranController;
use Illuminate\Support\Facades\Artisan;
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

Route::prefix("/")->group(function () {
    Route::get("/", [AuthController::class, "index"])->middleware("auth.guest")->name("siswa.auth.login");
    Route::post("/", [AuthController::class, "loginStore"])->name("siswa.auth.login.store");
    Route::get("/logout", [AuthController::class, "logout"])->name("siswa.auth.logout");
    Route::get("register", [AuthController::class, "register"])->name("siswa.auth.register");
    Route::post("register", [AuthController::class, "registerStore"])->name("siswa.auth.register.store");
    Route::prefix("siswa")->middleware('guest.check')->group(function () {
        Route::get("home", [HomeController::class, "index"])->name("siswa.home.index");
        Route::get("pdf", [HomeController::class, "pdf"])->name("siswa.pdf.show");
        Route::post("identitas", [HomeController::class, "identitas"])->name("siswa.form.identitas");
        Route::post("orang-tua", [HomeController::class, "orangTua"])->name("siswa.form.orang-tua");
        Route::post("alamat", [HomeController::class, "alamat"])->name("siswa.form.alamat");
        Route::post("dokumen", [HomeController::class, "dokumen"])->name("siswa.form.dokumen");

        Route::prefix("pembayaran")->group(function () {
            Route::get('/', [PembayaranController::class, "index"])->name('siswa.pembayaran.index');
            Route::post("/", [PembayaranController::class, "store"])->name("siswa.pembayaran.store");
        });
        Route::get("informasi", [InformasiController::class, "index"])->name("siswa.informasi.index");
    });
});

Route::prefix("admin")->group(function () {
    Route::middleware("admin.check")->group(function () {
        Route::get("dashboard", [DashboardController::class, "index"])->name("dashboard.index");
        Route::resource("management-user", ManagementUserController::class)->except(['create', 'show', 'update']);
        Route::controller(SiswaController::class)->prefix("siswa")->group(function () {
            Route::get("/", "index")->name("siswa.index");
            Route::get("/{id}", "show")->name("siswa.show");
            Route::put("/{id}", "update")->name("siswa.update");
            Route::get('export/excel', 'export')->name('siswa.export');
            Route::delete('/{id}', 'destroy')->name('siswa.destroy');
        });
        Route::prefix("pengaturan")->group(function () {
            Route::get("/", [PengaturanController::class, "index"])->name("pengaturan.index");
            Route::post("/", [PengaturanController::class, "store"])->name("pengaturan.store");
        });
    });
    Route::controller(LoginController::class)->prefix("login")->group(function () {
        Route::get("/", "index")->middleware("auth.admin")->name("login.index");
        Route::post("/", "store")->name("login.store");
        Route::get("/logout", "logout")->name("login.logout");
    });
});

Route::get("test", function () {
    return view("siswa.home.pdf");
});

Route::prefix("ajax")->controller(AjaxController::class)->group(function () {
    Route::get("kota/{id}", "kota");
    Route::get("kecamatan/{id}", "kecamatan");
});


Route::get("storage-link", function () {
    return Artisan::call("storage:link");
});
