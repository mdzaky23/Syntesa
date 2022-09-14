<?php

use Modules\Absen\Http\Controllers\CutiController;
use Modules\Absen\Http\Controllers\IzinController;
use Modules\Absen\Http\Controllers\UserController;
use Modules\Absen\Http\Controllers\AbsenController;
use Modules\Absen\Http\Controllers\HadirController;
use Modules\Absen\Http\Controllers\SakitController;
use Modules\Absen\Http\Controllers\TelatController;
use Modules\Absen\Http\Controllers\AbsentController;
use Modules\Absen\Http\Controllers\DivisiController;
use Modules\Absen\Http\Controllers\JabatanController;
use Modules\Absen\Http\Controllers\LaporanController;
use Modules\Absen\Http\Controllers\PegawaiController;
use Modules\Absen\Http\Controllers\DashuserController;
use Modules\Absen\Http\Controllers\GolonganController;
use Modules\Absen\Http\Controllers\PresensiController;
use Modules\Absen\Http\Controllers\UangsakuController;
use Modules\Absen\Http\Controllers\LpsrtabsenController;
use Modules\Absen\Http\Controllers\PendidikanController;



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
    Route::resource('/hadir', HadirController::class);
    Route::resource('/telat', TelatController::class);
    Route::resource('/izin', IzinController::class);
    Route::resource('/sakit', SakitController::class);
    Route::resource('/cuti', CutiController::class);
    Route::resource('/absent', AbsentController::class);
    Route::resource('/dashuser', DashuserController::class);
    Route::resource('/lpsrtabsen', LpsrtabsenController::class);
    Route::resource('/pendidikan', PendidikanController::class);
});
