<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;

Route::get('/', [ProductController::class, 'allProducts'])->name('products.user');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('forgot-password-form');
Route::post('/forgot-password', [PasswordResetController::class, 'searchAccount'])->name('search-account');
Route::get('/enter-verification-code', [PasswordResetController::class, 'showVerificationCodeForm'])->name('enter-verification-code');
Route::post('/enter-verification-code', [PasswordResetController::class, 'verifyCode'])->name('verify-code');
Route::get('/new-password', [PasswordResetController::class, 'showNewPasswordForm'])->name('new-password-form');
Route::post('/new-password', [PasswordResetController::class, 'resetPassword'])->name('reset-password');

Route::get('/logout', function () {
    Cookie::queue(Cookie::forget('username'));
    Cookie::queue(Cookie::forget('login_status'));
    Auth::logout();
    return redirect('/login'); 
})->name('logout');

Route::middleware(['auth.custom'])->group(function () {
    Route::resource('/products', ProductController::class);
});