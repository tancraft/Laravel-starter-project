<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsEditor;
use App\Http\Middleware\RedirectIfNotAuthenticated;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->alias([
            'admin' => IsAdmin::class, // Ajoutez le chemin complet pour éviter toute erreur
            'editor' => IsEditor::class,
            'auth' => RedirectIfNotAuthenticated::class, // Redirige vers la home
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();