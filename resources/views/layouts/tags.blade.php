@if (optional($post->tags)->count() > 0)
<div class="flex flex-wrap items-center">
    @foreach ($post->tags as $tag)
    <a
        href="{{ route('tags.show', $tag) }}"
        class="inline-flex items-center px-3 py-0.5 rounded-full text-sm bg-blue-600 text-white font-medium mx-0.5 my-0.5"
    >
        {{ $tag }}
    </a>
    @endforeach
</div>
@endif
