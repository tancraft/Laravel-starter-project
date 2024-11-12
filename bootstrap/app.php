<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Foundation\Application;
use App\Http\Middleware\RedirectIfNotAuthenticated;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->alias([
            'admin' => \App\Http\Middleware\IsAdmin::class, // Ajoutez le chemin complet pour éviter toute erreur
            'auth' => \App\Http\Middleware\RedirectIfNotAuthenticated::class, // Redirige vers la home
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();