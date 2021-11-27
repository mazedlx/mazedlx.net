@if (optional($post->tags)->count() > 0)
<div class="flex flex-wrap items-center space-x-2 text-gray-500">
    @foreach($post->tags as $tag)
    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
        {{ $tag }}
    </span>
    @endforeach
</div>
@endif
