<?php

namespace App\Http\Controllers\Web;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View as ViewFacade;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
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
