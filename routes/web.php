<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login',[LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register',[RegisterController::class, 'register']);

Route::get('/dashboard', fn() => 'dasboard :: '. auth()->id())->middleware('auth')->name('dashboard');