<?php

namespace App;

use Astrotomic\OpenGraph\OpenGraph;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public function all()
    {
        return $posts = Cache::get('posts.all', function () {
            return $this->retrieveFromDisk();
        });
    }

    public function find($year, $month, $day, $slug)
    {
        return $this->all()
            ->first(function ($post) use ($year, $month, $day, $slug) {
                return $post->date->format('Y-m-d') === implode('-', [$year, $month, $day])
                    && $post->slug === $slug;
            }, function () {
                abort(404);
            });
    }

    public function taggedWith($tag)
    {
        return $this->all()
            ->filter(function ($post) use ($tag) {
                return collect($post->tags)->contains($tag);
            }, function () {
                abort(404);
            });
    }

    public function retrieveFromDisk()
    {
        return collect(Storage::disk('posts')->files())
            ->filter(function ($path) {
                return Str::endsWith($path, '.md');
            })
            ->map(function ($path) {
                $filename = Str::after($path, 'posts/');
                [$date, $slug, $extension] = explode('.', $filename, 3);
                $date = Carbon::createFromFormat('Y-m-d', $date);
                $document = YamlFrontMatter::parse(Storage::disk('posts')->get($path));
                $og = OpenGraph::article($document->summary)
                    ->title($document->title)
                    ->url(route('posts.show', [$date->format('Y'), $date->format('m'), $date->format('d'), $slug]))
                    ->description($document->summary)
                    ->image(config('app.url') . '/img/background.jpg');

                return (object) [
                    'og' => $og,
                    'path' => $path,
                    'date' => $date,
                    'slug' => $slug,
                    'url' => route('posts.show', [$date->format('Y'), $date->format('m'), $date->format('d'), $slug]),
                    'external_url' => $document->external_url ?? false,
                    'title' => $document->title,
                    'category' => $document->category ?? 'general',
                    'contents' => markdown($document->body()),
                    'markdown' => $document->body(),
                    'summary' => markdown($document->summary ?? ''),
                    'summary_short' => mb_strimwidth($document->summary ?? $document->body(), 0, 140, '...'),
                    'preview_image' => $document->preview_image ? config('app.url')
                        . $document->preview_image : 'some-preview-image.png',
                    'published' => 'no' !== $document->published,
                    'tags' => '' !== $document->tags ? collect(explode(', ', $document->tags)) : null,
                ];
            })->filter(function ($post) {
                return $post->published;
            })->sortByDesc('date');
    }

    public function paginate($perPage)
    {
        $currentPage = request('page', 1);
        $items = Cache::get('posts.paginate.' . $currentPage, function () use ($perPage, $currentPage) {
            return $this->all()->slice(($currentPage - 1) * $perPage, $perPage);
        });

        return new LengthAwarePaginator($items, $this->all()->count(), $perPage);
    }
}
