<?php

use Modules\Inventory\Http\Controllers\PrintController;
use Modules\Inventory\Http\Controllers\InventoryController;
use Modules\Inventory\Http\Controllers\RekapdataController;
use Modules\Inventory\Http\Controllers\TambahbarangController;
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

Route::prefix('inventory')->group(function () {
    Route::get('/', 'InventoryController@index');
    Route::resource('/tambahbarang', TambahbarangController::class);

    Route::resource('/rekapdata', RekapdataController::class);
    Route::resource('/history', HistorybarangController::class);
    Route::resource('/print', PrintController::class);
});
