<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanjirController;
use App\Http\Controllers\AgrilinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lapor', [BanjirController::class, 'form'])->name('lapor.form');
Route::post('/lapor/kirim', [BanjirController::class, 'store'])->name('lapor.store');
Route::get('/laporan', [BanjirController::class, 'index'])->name('laporan.index');

Route::get('/', [AgrilinkController::class, 'beranda'])->name('agrilink.beranda');
Route::get('/marketplace', [AgrilinkController::class, 'marketplace'])->name('agrilink.marketplace');