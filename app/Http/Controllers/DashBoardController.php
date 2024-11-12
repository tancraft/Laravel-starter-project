<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashBoardController extends Controller
{
    public function index(): View
    {
        return view('dashboard/dashboard');
    }

    public function showPage($page)
    {
        // Vérifier si la vue existe
        if (view()->exists("dashboard.{$page}")) {
            return view("dashboard.{$page}");
        }

        // Si la vue n'existe pas, rediriger vers la page d'accueil
        return redirect('/');
    }
}
