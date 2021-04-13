<?php

namespace App\Http\Controllers;

use App\Post;
use Astrotomic\OpenGraph\OpenGraph;

class PostController extends Controller
{
    public function index(Post $posts)
    {
        $og = OpenGraph::website('blog.mazedlx.net')
                    ->url(config('app.url'))
                    ->description('blog.mazedlx.net')
                    ->image(config('app.url') . '/img/background.jpg');

        return view('posts.index', [
            'og' => $og,
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
