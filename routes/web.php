<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Generico\GenericoController;
use App\Http\Controllers\Unidad\UnidadController;
use App\Http\Controllers\Unidad\EspacioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/espacios', [EspacioController::class, 'index'])->name('espacios.ver');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::post('/unidad', [UnidadController::class, 'store'])->name('unidad.store');
    Route::get('/unidad', [UnidadController::class, 'index'])->name('unidad.index');
    Route::get('/unidad/create', [UnidadController::class, 'create'])->name('unidad.create');
    Route::get('/unidad/{unidad}/edit', [UnidadController::class, 'edit'])->name('unidad.edit');
    Route::get('/unidad/{unidad}', [UnidadController::class, 'show'])->name('unidad.show');
    Route::put('/unidad/{unidad}', [UnidadController::class, 'update'])->name('unidad.update');
    Route::delete('/unidad/{unidad}', [UnidadController::class, 'destroy'])->name('unidad.destroy');
});

require __DIR__.'/auth.php';
