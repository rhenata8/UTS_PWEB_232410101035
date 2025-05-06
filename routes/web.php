<?php

// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\Mention\Mention;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'landing'])->name('landing');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/', [PageController::class, 'doLogin'])->name('doLogin');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::post('/submit-reservasi', [PageController::class, 'submitReservasi'])->name('submitReservasi');
Route::get('/hapus-reservasi/{index}', [PageController::class, 'hapusReservasi'])->name('hapusReservasi');


Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::post('/update-profil', [PageController::class, 'updateProfil'])->name('updateProfil');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
