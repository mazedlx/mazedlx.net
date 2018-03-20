<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index')
            ->with('posts', $posts);
    }

    public function show($year, $month, $day, $slug)
    {
        return view('posts.show')
            ->with('post', Post::find($year, $month, $day, $slug));
    }
}
