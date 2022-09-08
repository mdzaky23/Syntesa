<?php


use Modules\Pengajuan\Http\Controllers\EditFormController;
use Modules\Pengajuan\Http\Controllers\PengajuanBiasaController;
use Modules\Pengajuan\Http\Controllers\PengajuanProjekController;
use Modules\Pengajuan\Http\Controllers\PengajuanDinasController;
use Modules\Pengajuan\Http\Controllers\DetailPengajuanController;
use Modules\Pengajuan\Http\Controllers\HistoriBiasaController;
use Modules\Pengajuan\Http\Controllers\DitolakController;
use Modules\Pengajuan\Http\Controllers\DiprosesController;

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

Route::prefix('pengajuan')->group(function () {
    Route::get('/', 'PengajuanController@index');
    Route::resource('/editForm', EditFormController::class);
    Route::resource('/pengajuanBiasa', PengajuanBiasaController::class);
    Route::resource('/pengajuanProjek', PengajuanProjekController::class);
    Route::resource('/pengajuanDinas', PengajuanDinasController::class);
    Route::resource('/detailPengajuan', DetailPengajuanController::class);
    Route::resource('/HistoriBiasa', HistoriBiasaController::class);
    Route::resource('/ditolak', DitolakController::class);
    Route::resource('/diproses', DiprosesController::class);
});
