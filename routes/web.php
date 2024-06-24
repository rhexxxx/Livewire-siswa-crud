<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::resource('/', SiswaController::class);

Route::get('/', [SiswaController::class, 'index'])->name('index');

Route::get('/create', [SiswaController::class, 'create'])->name('create');
Route::post('/', [SiswaController::class, 'store'])->name('store');

Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [SiswaController::class, 'update'])->name('update');

Route::delete('/destroy/{id}', [SiswaController::class, 'destroy'])->name('destroy');

