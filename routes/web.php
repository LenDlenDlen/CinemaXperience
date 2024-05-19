<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
    Route::get('/', [LoginController::class, 'showLandingPage'])->name('login');

    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'showSignUpPage'])->name('signup');

    Route::post('/register', [RegisterController::class, 'regist'])->name('register');

});

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
