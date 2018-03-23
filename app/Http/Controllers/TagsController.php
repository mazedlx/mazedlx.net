<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TagsController extends Controller
{
    public function show($tag, Post $posts)
    {
        $posts = $posts->taggedWith($tag);

        return view('tags.index')
            ->with('posts', $posts);
    }
}
