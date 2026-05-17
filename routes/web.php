<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [authController::class, 'register'])->name('auth.register');
Route::get('/login', [authController::class, 'login'])->name('auth.login');
Route::post('/register', [authController::class, 'store'])->name('auth.store');
Route::post('login', [authController::class, 'autheticate'])->name('auth,authenticate');
Route::delete('/logout',[authController::class, 'logout'])->name('auth.logout');
