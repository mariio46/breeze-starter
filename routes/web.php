<?php

use App\Http\Controllers\Auth\DangerController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\SecurityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::patch('profile', [ProfileController::class, 'update']);

    Route::get('security', [SecurityController::class, 'index'])->name('security');
    Route::put('security', [SecurityController::class, 'update']);

    Route::get('danger', [DangerController::class, 'index'])->name('danger');
    Route::delete('danger', [DangerController::class, 'delete']);
});

require __DIR__ . '/auth.php';
