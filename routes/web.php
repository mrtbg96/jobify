<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::redirect('/', '/jobs')->name('home');
Route::redirect('/login', '/login')->name('login');

Route::get('/seach', SearchController::class)
    ->name('search');

Route::get('/tags/{tag:name}', TagController::class)->name('tags');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::get('/jobs/create', [JobController::class, 'create'])
    ->name('jobs.create')
    ->middleware('auth');

Route::post('/jobs', [JobController::class, 'store'])
    ->name('jobs.store')
    ->middleware('auth');

Route::middleware('guest')->group( function () {
    Route::get('/login', [SessionController::class, 'create'])
        ->name('login.create');

    Route::post('/login', [SessionController::class, 'store'])
        ->name('login.store');

    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register.create');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->name('register.store');
});

Route::post('/logout', [SessionController::class, 'destroy'])
    ->name('logout')
    ->middleware('auth');
