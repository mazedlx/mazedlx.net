<article class="p-8">
    <h1 class="text-3xl font-bold prose hover:underline">
        <a class="" href="{{ $post->url }}">
            {{ $post->title}}
        </a>
    </h1>

    <div class="pb-2 prose text-gray-500">{{$post->date->diffForHumans() }}</div>
    <div class="pb-2 prose text-gray-900">{!! $post->summary !!}</div>

    @include('layouts.tags')
</article>
