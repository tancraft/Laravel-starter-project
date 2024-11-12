<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages/home');
    }

    public function showPage($page)
    {
        // Vérifier si la vue existe
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        // Si la vue n'existe pas, rediriger vers la page d'accueil
        return redirect('/');
    }

}
