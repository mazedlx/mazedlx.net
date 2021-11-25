@extends('layouts.app')

@section('title')
{{ $post->title }}
@endsection

@push('og')
{!! $post->og !!}

{!! $post->twitter !!}
@endpush

@section('content')
<div class="flex flex-col md:flex-row">
    <div class="w-full px-4 py-2 mx-auto lg:w-1/2">
        <h1 class="text-5xl font-bold prose">{{ $post->title }}</h1>

        <div class="pb-2 text-gray-500">{{$post->date->diffForHumans() }}</div>

        <x-markdown class="prose-lg">{!! $post->markdown !!}</x-markdown>

        @include('layouts.tags')
    </div>
</div>
@stop
