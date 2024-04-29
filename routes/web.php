<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlayerStatController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/rules', function () {
    return view('pages.rules');
})->name('rules');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])
        ->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
        ->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password', [ResetPasswordController::class, 'create'])
        ->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'store'])
        ->name('password.update');
    Route::match(['GET', 'POST'], '/payments/callback', [PaymentController::class, 'callback'])
        ->name('payment.callback');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');
    Route::get('/players', [PlayerStatController::class, 'index'])
        ->name('players.index');
    Route::get('/market', [MarketController::class, 'index'])
        ->name('market.index');
    Route::post('/market', [MarketController::class, 'store'])
        ->name('market.store');
    Route::post('/payments/create', [PaymentController::class, 'create'])
        ->name('payment.create');
    Route::get('/payment', [PaymentController::class, 'index'])
        ->name('payment.index');
    Route::view('/thank-you', 'payments.thanks')
        ->name('thank-you');
});
