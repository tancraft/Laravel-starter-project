<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:admin,editor']);
    // }

    public function index()
    {
        $tags = Tag::all();
        return view('cruds.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('cruds.tags.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tag::create($validated);

        return redirect()->route('tags.index')->with('success', 'Tag créé avec succès.');
    }

    public function edit(Tag $tag)
    {
        return view('cruds.tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $tag->update($validated);

        return redirect()->route('tags.index')->with('success', 'Tag mis à jour avec succès.');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Tag supprimé avec succès.');
    }
}

