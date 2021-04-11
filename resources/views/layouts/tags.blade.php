@if (optional($post->tags)->count() > 0)
<div class="flex items-center text-gray-500">
    @foreach($post->tags as $tag)
        <a class="flex items-center px-2 mr-2 border border-gray-500 rounded-full hover:border-gray-700 hover:text-gray-700" href="{{ route('tags.show', $tag) }}">
            <x-heroicon-o-tag class="w-4 h-4 mr-1 fill-current" />
            {{ $tag }}
        </a>
    @endforeach
</div>
@endif
