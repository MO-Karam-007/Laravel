<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = session(
            'posts',
            []
        );
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $posts = session('posts', []);
        $newId = count($posts) + 1;
        $posts[$newId] = $request->only('title', 'content');

        session(['posts' => $posts]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $posts = session('posts', []);
        $post = $posts[$id] ?? null;

        if (!$post) {
            abort(404);
        }

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $posts = session('posts', []);
        $post = $posts[$id] ?? null;

        if (!$post) {
            abort(404);
        }

        return view('posts.edit', compact('post', 'id'));
    }

    public function update(Request $request, $id)
    {
        $posts = session('posts', []);
        $posts[$id] = $request->only('title', 'content');

        // Update the session with the modified posts array
        session(['posts' => $posts]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $posts = session('posts', []);
        unset($posts[$id]);

        // Update the session with the modified posts array
        session(['posts' => $posts]);

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
