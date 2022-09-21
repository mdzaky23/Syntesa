<?php

use Modules\Absen\Http\Controllers\GajiController;
use Modules\Absen\Http\Controllers\UserController;
use Modules\Absen\Http\Controllers\AbsenController;
use Modules\Absen\Http\Controllers\DivisiController;
use Modules\Absen\Http\Controllers\JabatanController;
use Modules\Absen\Http\Controllers\LaporanController;
use Modules\Absen\Http\Controllers\PegawaiController;
use Modules\Absen\Http\Controllers\DashuserController;
use Modules\Absen\Http\Controllers\GolonganController;
use Modules\Absen\Http\Controllers\PresensiController;
use Modules\Absen\Http\Controllers\UangsakuController;
use Modules\Absen\Http\Controllers\GajipokokController;
use Modules\Absen\Http\Controllers\SuratcutiController;
use Modules\Absen\Http\Controllers\LpsrtabsenController;
use Modules\Absen\Http\Controllers\PendidikanController;
use Modules\Absen\Http\Controllers\WaktukerjaController;
use Modules\Absen\Http\Controllers\JenispegawaiController;
use Modules\Absen\Http\Controllers\PrintsuratcutiController;



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

Route::prefix('absen')->group(function() {
    Route::get('/', 'AbsenController@index');
    Route::resource('/pegawai', PegawaiController::class);
    Route::resource('/jabatan', JabatanController::class);
    Route::resource('/divisi', DivisiController::class);
    Route::resource('/golongan', GolonganController::class);
    Route::resource('/presensi', PresensiController::class);
    Route::resource('/uangsaku', UangsakuController::class);
    Route::resource('/laporan', LaporanController::class);
    Route::resource('/dashuser', DashuserController::class);
    Route::resource('/lpsrtabsen', LpsrtabsenController::class);
    Route::resource('/pendidikan', PendidikanController::class);
    Route::resource('/jenispegawai', JenispegawaiController::class);
    Route::resource('/gaji', GajiController::class);
    Route::resource('/gajipokok', GajipokokController::class);
    Route::resource('/suratcuti', SuratcutiController::class);
    Route::resource('/printsuratcuti', PrintsuratcutiController::class);
    Route::resource('/waktukerja', WaktukerjaController::class);
});
