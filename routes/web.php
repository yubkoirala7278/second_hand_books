<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');

// ========Authentication===========
Auth::routes([
    'register' => false, // Disable registration
    'verify' => false,   // Disable email verification
]);
// =======End of Authentication=============

// ============Public===============
require __DIR__ . '/public.php';
// =======End of Public===============

// =========Admin============
Route::middleware(['auth.admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        require __DIR__ . '/admin.php';
    });
});
// ========End of Admin===========





