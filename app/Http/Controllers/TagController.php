<?php

namespace App\Http\Controllers;

use App\Post;
use Astrotomic\OpenGraph\OpenGraph;

class TagController extends Controller
{
    public function index(Post $posts)
    {
        $og = OpenGraph::website('blog.mazedlx.net')
            ->url(config('app.url'))
            ->description('blog.mazedlx.net')
            ->image(config('app.url') . '/img/background.jpg');

        $tags = $posts->all()->map(function ($post) {
            return $post->tags;
        })->flatten()->countBy();

        return view('tags.index', [
            'og' => $og,
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
