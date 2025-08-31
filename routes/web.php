<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

Route::get('/', [CVController::class, 'index'])->name('index');
Route::get('/cs', [CVController::class, 'cs'])->name('cs');
Route::get('/seblak', [CVController::class, 'seblak'])->name('seblak');

