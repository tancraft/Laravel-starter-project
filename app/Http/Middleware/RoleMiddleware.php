<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Récupère les noms des rôles de l'utilisateur
        $userRoles = Auth::user()->roles->pluck('name')->toArray();

        // Vérifie si au moins un rôle requis est présent
        if (empty(array_intersect($roles, $userRoles))) {
            return redirect()->route('home')->with('error', 'Accès refusé à cette page.');
        }

        return $next($request);
    }
}


