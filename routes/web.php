<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;


/**
 * routes publiques
 */

// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth','admin')->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'index']);

    // Route::get('/dashboard/{page}', function ($page) {
    //     if (view()->exists("dashboard.{$page}")) {
    //         return view("dashboard.{$page}");
    //     }
    //     return redirect('/');
    // })->where('page', '.*');
    Route::get('/dashboard/{page}', [DashboardController::class, 'showPage'])->where('page', '.*');
});

Route::get('/{page}', [HomeController::class, 'showPage'])->where('page', '.*');



