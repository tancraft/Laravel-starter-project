<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->guest(route('login'));
        }

        // Vérifie si l'utilisateur a un rôle parmi les rôles autorisés
        if (!in_array(Auth::user()->role_id, $roles)) {
            return response()->view('errors.403', [], 403);
        }

        return $next($request);
    }
}

