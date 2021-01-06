<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Register Route
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/posts', function () {
    return view('posts.index');
});
