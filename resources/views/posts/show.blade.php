@extends('layouts.app')

@section('title')
{{ $post->title }}
@endsection

@push('og')
{!! $post->og !!}

{!! $post->twitter !!}
@endpush

@section('content')
<div class="flex flex-col-reverse md:flex-row">
    <div class="w-full mx-auto md:w-1/2">
        <div class="px-4 pt-16 pb-20 bg-white sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                <article class="prose lg:prose-xl">
                    <h1>{{ $post->title }}</h1>

                    <time date="{{ $post->date->format('Y-m-d') }}">
                        {{ $post->date->diffForHumans() }}
                    </time>

                    <p>{!! $post->contents !!}</p>
                </article>
            </div>
            <div class="flex items-center">
                <span class="mr-1">Tagged with:</span> @include('layouts.tags')
            </div>
        </div>
    </div>
</div>
@endsection
