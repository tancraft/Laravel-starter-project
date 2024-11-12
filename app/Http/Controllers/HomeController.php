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

    public function show($page)
    {
        if (View::exists("pages.{$page}")) {
            return view("pages.{$page}");
        }
        // Retourner une page 404 si la vue n'existe pas
        abort(404);
    }
}
