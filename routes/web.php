<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

Route::get('/', [CVController::class, 'karikop'])->name('karikop');
Route::get('/ProdukUmi', [CVController::class, 'ProdukUmi'])->name('produkumi');
Route::get('/IstyPJ', [CVController::class, 'IstyPJ'])->name('istypj');
