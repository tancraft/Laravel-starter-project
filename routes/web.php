<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;

/**
 * Routes publiques avec contrôleur unique
 */
Route::controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/{page}', 'showPage')->where('page', 'about|galeries|tools');
});

/**
 * Routes du tableau de bord
 */
// Route::middleware('auth')->prefix('dashboard')->controller(DashboardController::class)->group(function () {

//     // Routes accessibles à tous les utilisateurs authentifiés
//     Route::get('/posts', [DashboardController::class, 'posts']);

//     // Routes pour l'admin seulement
//     Route::middleware('admin')->group(function () {
//         Route::get('/admin', [DashboardController::class, 'admin']);
//         Route::get('/users', [DashboardController::class, 'users']);
//     });

//     // Routes pour l'éditeur seulement
//     Route::middleware('editor')->group(function () {
//         Route::get('/editor', [DashboardController::class, 'editor']);
//     });
// });

Route::middleware('auth')->prefix('dashboard')->group(function () {

    // Route accessible à tous les utilisateurs authentifiés
    Route::get('/posts', [DashboardController::class, 'posts']);

    // Routes spécifiques aux rôles
    Route::middleware('role:1')->group(function () { // Admin uniquement
        Route::get('/admin', [DashboardController::class, 'admin']);
        Route::get('/users', [DashboardController::class, 'users']);
    });

    Route::middleware('role:1,2')->group(function () { // Admin + Editeur
        Route::get('/editor', [DashboardController::class, 'editor']);
    });
});




