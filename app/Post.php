<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Collection;

class Post
{
    public static function all()
    {
        return $posts = Cache::get('posts.all', function () {
            return self::retrieveFromDisk();
        });
    }

    public static function find($year, $month, $day, $slug)
    {
        return self::all()
            ->first(function ($post) use ($year, $month, $day, $slug) {
                return $post->date->year == $year &&
                    $post->date->month == $month &&
                    $post->date->day == $day &&
                    $post->slug == $slug;
            }, function () {
                abort(404);
            });
    }

    public static function retrieveFromDisk()
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
                    'summary' => Markdown::convertToHtml($document->summary ?? $document->body()),
                    'summary_short' => mb_strimwidth($document->summary ?? $document->body(), 0, 140, "..."),
                    'preview_image' => $document->preview_image ? env('APP_URL') . $document->preview_image : 'some-preview-image.png',
                    'published' => $document->published ?? true,
                    'tags' => explode(', ', $document->tags) ?? [],
                ];
            })
            ->filter(function ($post) {
                return $post->published;
            })
            ->sortByDesc('date');
    }

    public static function paginate($perPage)
    {
        return Cache::get('posts.paginate.' . request('page', 0), function () use ($perPage) {
            return self::all()->slice(request('page', 0) * $perPage, $perPage);
        });
    }
}
