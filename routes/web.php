<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::post('/login',[LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    Route::post('/register',[RegisterController::class, 'register']);

});

Route::get('/logout', LogoutController::class);




Route::get('/dashboard', fn() => 'dasboard :: '. auth()->id())->middleware('auth')->name('dashboard');