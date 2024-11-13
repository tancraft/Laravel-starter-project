<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\View as ViewFacade;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages/home');
    }

    public function showPage($page): View
    {
        // Vérifie si la vue pour la page demandée existe
        if (ViewFacade::exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        // Redirige vers la page d'accueil si la vue n'existe pas
        return redirect('/');
    }

}
