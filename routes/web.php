<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login',[LoginController::class, 'login']);

Route::get('/dashboard', fn() => 'dasboard :: '. auth()->id())->middleware('auth')->name('dashboard');