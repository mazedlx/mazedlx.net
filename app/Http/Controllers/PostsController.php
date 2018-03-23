<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(Post $posts)
    {
        return view('posts.index')
            ->with('posts', $posts->paginate(5));
    }

    public function show($year, $month, $day, $slug, Post $posts)
    {
        return view('posts.show')
            ->with('post', $posts->find($year, $month, $day, $slug));
    }
}
