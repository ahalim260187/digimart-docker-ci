<?php

use App\Http\Controllers\Admin\AuthenticatedAdminSessionController;
use App\Http\Controllers\Admin\RegisteredAdminController;
use App\Http\Controllers\Admin\PasswordResetLinkAdminController;
use App\Http\Controllers\Admin\NewPasswordAdminController;
use App\Http\Controllers\Admin\ConfirmablePasswordAdminController;
use App\Http\Controllers\Admin\EmailVerificationAdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        if (auth('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    });

    Route::get('/register', function () {
        if (auth('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    });

    Route::get('/login', [AuthenticatedAdminSessionController::class, 'create'])->middleware('guest:admin')->name('login');
    Route::post('/login', [AuthenticatedAdminSessionController::class, 'store'])->middleware('guest:admin');
    Route::post('/logout', [AuthenticatedAdminSessionController::class, 'destroy'])->middleware('auth:admin')->name('logout');

    Route::get('/forgot-password', [PasswordResetLinkAdminController::class, 'create'])->middleware('guest:admin')->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkAdminController::class, 'store'])->middleware('guest:admin')->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordAdminController::class, 'create'])->middleware('guest:admin')->name('password.reset');
    Route::post('/reset-password', [NewPasswordAdminController::class, 'store'])->middleware('guest:admin')->name('password.store');

    Route::get('/verify-email', [EmailVerificationAdminController::class, 'notice'])->middleware('auth:admin')->name('verification.notice');
    Route::get('/verify-email/{id}/{hash}', [EmailVerificationAdminController::class, 'verify'])->middleware(['auth:admin', 'signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationAdminController::class, 'send'])->middleware(['auth:admin', 'throttle:6,1'])->name('verification.send');

    Route::get('/confirm-password', [ConfirmablePasswordAdminController::class, 'show'])->middleware('auth:admin')->name('password.confirm');
    Route::post('/confirm-password', [ConfirmablePasswordAdminController::class, 'store'])->middleware('auth:admin');

    Route::get('/dashboard', function () {
        if (!auth('admin')->check()) {
            return redirect()->route('admin.login');
        }
        return view('admin.dashboard');
    })->name('dashboard');
});
