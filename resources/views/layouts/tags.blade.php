@if (optional($post->tags)->count() > 0)
<div class="flex items-center text-gray-500">
    @foreach($post->tags as $tag)
        <a class="flex items-center mr-2 border rounded-full border-gray-500 px-2 hover:border-gray-700 hover:text-gray-700" href="{{ route('tags.show', $tag) }}">
            @svg('tag', 'fill-current h-4 w-4 mr-1')
            {{ $tag }}
        </a>
    @endforeach
</div>
@endif