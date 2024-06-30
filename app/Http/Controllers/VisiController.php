<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class visiController extends Controller
{
    public function beranda()
    {
        $post = Post::latest()->take(3)->get();
        return view('beranda', compact('post'));
    }

    public function post_index()
    {
        $post = Post::latest()->get();
        return view('post-index', compact('post'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', compact('post'));
    }
}
