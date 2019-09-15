<article class="bg-gray-100 p-8">
    <h1 class="font-bold text-2xl hover:underline font-serif">
        <a class="" href="{{ $post->url }}">
            {{ $post->title}}
        </a>
    </h1>

    <div class="font-sans text-gray-500 pb-2">{{$post->date->diffForHumans() }}</div>
    <div class="font-sans text-gray-900 pb-2">{!! $post->summary !!}</div>

    @include('layouts.tags')
</article>