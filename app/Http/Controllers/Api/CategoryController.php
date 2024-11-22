<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:admin,editor']);
    // }

    public function index()
    {
        $categories = Category::all();
        return view('cruds.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('cruds.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($validated);

        return redirect()->route('categories.index')->with('success', 'Catégorie créée avec succès.');
    }

    public function edit(Category $category)
    {
        return view('cruds.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}

