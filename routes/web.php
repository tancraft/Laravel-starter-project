<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\DashboardController;

/**
 * Routes du tableau de bord avec middleware pour vérifier l'authentification et les rôles
 */
Route::controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/{page}', 'showPage')->where('page', 'about|galeries|tools');
});

/**
 * Routes du dashboard avec middleware pour vérifier l'authentification et les rôles
 */
Route::middleware('auth')->prefix('dashboard')->group(function () {

    // Route accessible à tous les utilisateurs authentifiés
    Route::get('/posts', [DashboardController::class, 'posts']);

    // Routes spécifiques aux rôles
    Route::middleware('role:admin')->group(function () { // Admin uniquement
        Route::get('/admin', [DashboardController::class, 'admin']);
        Route::get('/users', [DashboardController::class, 'users']);
    });

    Route::middleware('role:admin,editor')->group(function () { // Admin + Editeur
        Route::get('/editor', [DashboardController::class, 'editor']);
    });
});







