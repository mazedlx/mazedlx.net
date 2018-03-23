<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use GrahamCampbell\Markdown\Facades\Markdown;

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
                return $post->date->year == $year &&
                    $post->date->month == $month &&
                    $post->date->day == $day &&
                    $post->slug == $slug;
            }, function () {
                abort(404);
            });
    }

    public function taggedWith($tag)
    {
        return $this->all()
            ->filter(function ($post) use ($tag) {
                if(! is_array($post->tags)) {
                    return false;
                }
                return in_array($tag, $post->tags);
            }, function () {
                abort(404);
            });
    }

    public function retrieveFromDisk()
    {
        return collect(Storage::disk('posts')->allFiles())
            ->filter(function ($path) {
                return ends_with($path, '.md');
            })
            ->map(function ($path) {
                $filename = str_after($path, 'posts/');
                [$date, $slug, $extension] = explode('.', $filename, 3);
                $date = Carbon::createFromFormat('Y-m-d', $date);
                $document = YamlFrontMatter::parse(Storage::disk('posts')->get($path));

                return (object) [
                    'path' => $path,
                    'date' => $date,
                    'slug' => $slug,
                    'url' => route('posts.show', [$date->format('Y'), $date->format('m'), $date->format('d'), $slug]),
                    'external_url' => $document->external_url ?? false,
                    'title' => $document->title,
                    'category' => $document->category ?? 'general',
                    'contents' => Markdown::convertToHtml($document->body()),
                    'summary' => Markdown::convertToHtml($document->summary),
                    'summary_short' => mb_strimwidth($document->summary ?? $document->body(), 0, 140, "..."),
                    'preview_image' => $document->preview_image ? env('APP_URL') . $document->preview_image : 'some-preview-image.png',
                    'published' => $document->published ?? true,
                    'tags' => $document->tags != '' ? collect(explode(', ', $document->tags)) : null,
                ];
            })
            ->filter(function ($post) {
                return $post->published;
            })
            ->sortByDesc('date');
    }

    public function paginate($perPage)
    {
        return Cache::get('posts.paginate.' . request('page', 0), function () use ($perPage) {
            return $this->all()->slice(request('page', 0) * $perPage, $perPage);
        });
    }
}
