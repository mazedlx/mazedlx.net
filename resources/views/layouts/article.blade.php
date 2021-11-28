<article>
    <div>
        <div class="inline-block">
            @include('layouts.tags')
        </div>
    </div>
    <a href="{{ $post->url }}" class="block mt-4">
        <p class="text-xl font-semibold text-gray-900">
            {{ $post->title}}
        </p>
        <p class="mt-3 text-base text-gray-500">
            {!! $post->summary !!}
        </p>
    </a>

    <div class="flex items-center mt-6">
        <div class="ml-3">
            <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="{{ $post->date->format('Y-m-d') }}">
                    {{ $post->date->diffForHumans() }}
                </time>
                <span aria-hidden="true">
                    &middot;
                </span>
                <span>
                    {{ $post->read_time }} min read
                </span>
            </div>
        </div>
    </div>
</article>
