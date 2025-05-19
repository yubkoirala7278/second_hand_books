<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


