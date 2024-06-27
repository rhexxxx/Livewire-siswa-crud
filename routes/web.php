<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreateSiswa;
use App\Livewire\EditSiswa;
use App\Livewire\SiswaList;
use App\Http\Controllers\SiswaController;

Route::resource('Siswas', SiswaController::Class);
Route::get('/', SiswaList::class)->name('index');
Route::get('/create', CreateSiswa::class)->name('create');
Route::get('/edit/{id}', EditSiswa::class)->name('edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', Siswalist::class)->name('index');
});

require __DIR__.'/auth.php';
