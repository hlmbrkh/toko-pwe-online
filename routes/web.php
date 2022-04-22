<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\BeliController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\EnamController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\LimaController;
use App\Http\Controllers\SatuController;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\AntarController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\GantiController;
use App\Http\Controllers\TujuhController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\DelapanController;
use App\Http\Controllers\SembilanController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TukarTambahController;


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

Route::get('/Beranda', function () {
    echo ("Anda Memasuki Halaman Beranda");
});

Route::get('/Profil-pemilik', function () {
    echo ("Anda Memasuki Halaman Profil Pemilik");
});

Route::get('/Profil/sejarah-toko', function () {
    echo ("Anda Memasuki Halaman Sejarah Toko");
});

Route::get('/Profil/Lambang', function () {
    echo ("Anda Memasuki Halaman Lambang didalam Profil");
});

Route::get('/Toko', function () {
    echo ("Anda Memasuki Halaman Toko");
});

Route::get('/Toko/Daging', function () {
    echo ("Anda Memasuki Halaman Daging didalam Toko");
});

Route::get('/Toko/Sayuran', function () {
    echo ("Anda Memasuki Halaman Sayuran didalam Toko");
});

Route::get('/Pegawai', function () {
    echo ("Anda Memasuki Halaman Pegawai");
});

Route::get('/Pegawai/Bidang-IT', function () {
    echo ("Anda Memasuki Halaman Bidang-IT didalam Pegawai");
});

Route::get('/Pegawai/Bidang-Pengemasan', function () {
    echo ("Anda Memasuki Halaman Bidang-Pengemasan didalam Pegawai");
});
 
Route::get('/jual', [JualController::class, 'sama']);

Route::get('/Antar', [AntarController::class, 'sama']);

Route::get('/Bantuan', [BantuanController::class, 'sama']);

Route::get('/Bayar', [BayarController::class, 'sama']);

Route::get('/Beli', [BeliController::class, 'sama']);

Route::get('/Cari', [CariController::class, 'sama']);

Route::get('/Detail', [DetailController::class, 'sama']);

Route::get('/Ganti', [GantiController::class, 'sama']);

Route::get('/Keranjang', [KeranjangController::class, 'sama']);

Route::get('/TukarTambah', [TukarTambahController::class, 'sama']);