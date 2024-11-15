<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Récupère l'ID du rôle de l'utilisateur
        $userRoleId = Auth::user()->role_id;

        // Charge les rôles à partir de la configuration
        $rolesFromConfig = config('roles');

        // Vérifie si les rôles sont bien définis dans la configuration
        if (empty($rolesFromConfig)) {
            return redirect()->route('home')->with('error', 'Aucun rôle défini.');
        }

        // Vérifie si l'ID du rôle de l'utilisateur est autorisé
        $allowedRoles = array_map(function ($role) use ($rolesFromConfig) {
            return $rolesFromConfig[$role];
        }, $roles);

        // Si l'utilisateur n'a pas le rôle autorisé
        if (!in_array($userRoleId, $allowedRoles)) {
            return redirect()->route('home')->with('error', 'Accès refusé à cette page.');
        }

        return $next($request);
    }
}


