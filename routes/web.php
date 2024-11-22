<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;

use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\AdminController;

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
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

});

Route::middleware(['auth'])->group(function () {

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    Route::middleware(['role:admin,editor'])->group(function () {

        Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

        Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

        Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

    Route::middleware(['role:admin,editor'])->group(function () {

        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });
});

Route::middleware(['auth'])->group(function () {

    Route::get('/tags', [TagController::class, 'index'])->name('tags.index');

    Route::middleware(['role:admin,editor'])->group(function () {

        Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');

        Route::post('/tags', [TagController::class, 'store'])->name('tags.store');

        Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');

        Route::put('/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
        Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
    });
});











