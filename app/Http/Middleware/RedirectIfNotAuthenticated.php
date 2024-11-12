<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class RedirectIfNotAuthenticated extends Middleware
{
    protected function redirectTo($request)
    {
        return route('home');
    }
}

