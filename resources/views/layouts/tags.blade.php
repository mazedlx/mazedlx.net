@if (optional($post->tags)->count() > 0)
<div class="flex items-center">
    <i class="text-grey" data-feather="tag" class="pr-2"></i>
    @foreach($post->tags as $tag)
        <a class="border rounded mx-1 px-2 no-underline text-grey hover:text-teal hover:border-teal" href="{{ route('tags.show', $tag) }}">
            {{ $tag }}
        </a>
    @endforeach
</div>
@endif