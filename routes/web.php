<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [authController::class, 'register'])->name('auth.register');
Route::get('/login', [authController::class, 'login'])->name('auth.login');
Route::post('/register', [authController::class, 'store'])->name('auth.store');
Route::post('login', [authController::class, 'authenticate'])->name('auth.authenticate');
Route::delete('/logout',[authController::class, 'logout'])->name('auth.logout');


Route::middleware(['auth', 'role:job_seeker'])
    ->group(function () {
        Route::get('/jobs', function () {
            return view('jobs.index');
        })->name('jobs.index');

        Route::get('/profile', [ProfileController::class, 'index'])
            ->name('jobs.profile');
        Route::post('/profile', [ProfileController::class, 'store'])
            ->name('profile.store');

    });




Route::middleware(['auth', 'role:company'])
    ->group(function () {
        Route::get('/company/dashboard', function () {
            return view('company.dashboard');
        })->name('company.dashboard');
    });
