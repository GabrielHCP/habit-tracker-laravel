<?php

use Illuminate\Support\Facades\Route;

// SITE
Route::get("/", [\App\Http\Controllers\SiteController::class, 'index'])->name('site.index');

// LOGIN
Route::get("/login", [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('site.login');
Route::post("/login", [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('auth.login');

// REGISTER
Route::get("/cadastro", [\App\Http\Controllers\RegisterController::class, 'index'])->name('site.register');
Route::post("/cadastro", [\App\Http\Controllers\RegisterController::class, 'store'])->name('auth.register');


// AUTH - Rotas para usuário logado (middleware)
Route::middleware('auth')->group(function() {

    // Dashboard
    Route::get('/dashboard', [\App\Http\Controllers\SiteController::class, 'dashboard'])->name('site.dashboard');

    // Logout
    Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');

});