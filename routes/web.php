<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
});

// Rutas compartidas por autenticados
Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Rutas exclusivas para veterinarios
Route::middleware(['auth', 'role:veterinario'])->group(function () {
    Route::get('/home', [AuthController::class, 'home'])->name('home');
});

// Rutas exclusivas para administradores
Route::middleware(['auth', 'role:administrador'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home'])->name('admin.home');
});
