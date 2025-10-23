<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login',[PageController::class, 'prosesLogin'])->name('proses.login');
Route::get('/dashboard',[PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile',[PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan',[PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/logout',[PageController::class, 'logout'])->name('logout');
