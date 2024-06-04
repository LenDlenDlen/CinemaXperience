<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\WatchMovieController;
use App\Http\Controllers\PaymentController;



Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [LoginController::class, 'handle']);


Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'showLandingPage'])->name('login');

    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'showSignUpPage'])->name('signup');

    Route::post('/register', [RegisterController::class, 'regist'])->name('register');

});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'showAdminDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:member,non-member'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/user/dashboard', [DashboardController::class, 'showProfileDashboard'])->name('user.dashboard');
    Route::get('/user/subscription', [SubscribeController::class, 'show'])->name('subscription');
    Route::get('/user/watch/{id}', [WatchMovieController::class, 'watch'])->name('watch');
    Route::get('/user/friendlist', [FriendController::class, 'showFriends'])->name('user.friendlist');

});

Route::middleware(['auth', 'role:non-member'])->group(function(){
    Route::get('user/paymentCard', [PaymentController::class, 'card'])->name('card');
    Route::get('user/paymentQris', [PaymentController::class, 'qris'])->name('qris');
});
