<?php

namespace App\Http\Controllers;

use App\Post;

class TagController extends Controller
{
    public function index(Post $posts)
    {
        $tags = $posts->all()->map(function ($post) {
            return $post->tags;
        })->flatten()->countBy();

        return view('tags.index', [
            'tags' => $tags,
        ]);
    }

    public function show($tag, Post $posts)
    {
        $posts = $posts->taggedWith($tag);

        return view('posts.tags', [
            'posts' => $posts,
        ]);
    }
}
