<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        auth()->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.index');
    }
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    
}

