<?php

use Illuminate\Support\Facades\Route;

// SITE
Route::get("/", [\App\Http\Controllers\SiteController::class, 'index']);

// LOGIN
Route::get("/login", [\App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post("/login", [\App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
