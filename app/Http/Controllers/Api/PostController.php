<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:admin,editor'])->except(['index', 'show']);
    // }

    public function index()
    {
        $posts = Post::all();
        return view('cruds.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('cruds.posts..show', compact('post'));
    }

    public function create()
    {
        return view('cruds.posts..create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', 'Post créé avec succès.');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post mis à jour avec succès.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post supprimé avec succès.');
    }
}
