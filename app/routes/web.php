<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;


Route::get('/', [Home::class, 'index']);

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__ . '/auth.php';
