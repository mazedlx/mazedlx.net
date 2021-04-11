<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index(Post $posts)
    {
        return view('posts.index', [
            'posts' => $posts->paginate(5),
        ]);
    }

    public function show($year, $month, $day, $slug, Post $posts)
    {
        return view('posts.show', [
            'post' => $posts->find($year, $month, $day, $slug),
        ]);
    }
}
