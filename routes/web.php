<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [authController::class, 'register'])->name('auth.register');
Route::get('/login', [authController::class, 'login'])->name('login');
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

        // JSON Profile Endpoints
        Route::post('/profile/experience', [ProfileController::class, 'storeExperience'])->name('profile.experience.store');
        Route::delete('/profile/experience/{index}', [ProfileController::class, 'destroyExperience'])->name('profile.experience.destroy');

        Route::post('/profile/education', [ProfileController::class, 'storeEducation'])->name('profile.education.store');
        Route::delete('/profile/education/{index}', [ProfileController::class, 'destroyEducation'])->name('profile.education.destroy');

        Route::post('/profile/skill', [ProfileController::class, 'storeSkill'])->name('profile.skill.store');
        Route::delete('/profile/skill/{index}', [ProfileController::class, 'destroySkill'])->name('profile.skill.destroy');

    });




Route::middleware(['auth', 'role:company'])
    ->group(function () {
        Route::get('/company/dashboard', function () {
            return view('company.dashboard');
        })->name('company.dashboard');
    });
