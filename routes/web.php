<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ObatController;

Route::middleware(['auth'])->group(function () {
    Route::resource('obat', ObatController::class);
});

Route::resource('obat', ObatController::class)->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::resource('obat', ObatController::class)->only(['index', 'create', 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ObatController::class, 'index'])->name('home');
    Route::resource('obat', ObatController::class)->except(['show']);

});

Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');
Route::put('/obat/{id}', [ObatController::class, 'update'])->name('obat.update');
Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');

