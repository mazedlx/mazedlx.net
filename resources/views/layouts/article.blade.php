<article class="bg-white p-8">
    <h1 class="font-serif">
        <a class="no-underline text-black hover:text-teal" href="{{ $post->url }}">
            {{ $post->title}}
        </a>
    </h1>

    <div class="font-sans text-grey-darker pb-2">{{$post->date->diffForHumans() }}</div>
    <div class="font-sans pb-2">{!! $post->summary !!}</div>

    @include('layouts.tags')
</article>