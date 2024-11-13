<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashBoardController extends Controller
{
    public function admin(): View
    {
        return view('dashboard/admin');
    }

    public function editor(): View
    {
        return view('dashboard/editor');
    }

    public function users(): View
    {
        return view('dashboard/users');
    }

    public function posts(): View
    {
        return view('dashboard/posts');
    }

    // public function showDashboard($page)
    // {
    //     // Vérifier si la vue existe
    //     if (view()->exists("dashboard.{$page}")) {
    //         return view("dashboard.{$page}");
    //     }

    //     // Si la vue n'existe pas, rediriger vers la page d'accueil
    //     return redirect('/');
    // }
}
