<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Rota da página inicial (home) redirecionando para o controlador "dashboard"
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Coloque aqui suas rotas que requerem autenticação
    // Por exemplo, outras rotas do dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');
});

// Rotas de login e registro
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
