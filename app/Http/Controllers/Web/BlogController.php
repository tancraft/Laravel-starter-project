<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View as ViewFacade;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::all();
        return view('pages.home', compact('posts'));
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
