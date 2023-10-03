<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Auth\DangerController;
use App\Http\Controllers\Auth\SecurityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('series', SeriesController::class)->name('series');

Route::get('articles', ArticleController::class)->name('articles');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::get('settings/account', [AccountController::class, 'index'])->name('settings.account');
    Route::patch('settings/account', [AccountController::class, 'update']);

    Route::get('settings/security', [SecurityController::class, 'index'])->name('settings.security');
    Route::put('settings/security', [SecurityController::class, 'update']);

    Route::get('settings/danger', [DangerController::class, 'index'])->name('settings.danger');
    Route::delete('settings/danger', [DangerController::class, 'delete']);
});

require __DIR__ . '/auth.php';
