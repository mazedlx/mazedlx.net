<?php

namespace App\Http\Controllers;

use App\Post;
use Astrotomic\OpenGraph\OpenGraph;
use Astrotomic\OpenGraph\Twitter;

class PostController extends Controller
{
    public function index(Post $posts)
    {
        $og = OpenGraph::website('blog.mazedlx.net')
                    ->url(config('app.url'))
                    ->description('blog.mazedlx.net')
                    ->image(config('app.url') . '/img/background.jpg');

        $twitter = Twitter::summary('blog.mazedlx.net')
            ->description('blog.mazedlx.net')
            ->image(config('app.url') . '/img/background.jpg')
            ->site(config('app.url'));

        return view('posts.index', [
            'og' => $og,
            'twitter' => $twitter,
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
