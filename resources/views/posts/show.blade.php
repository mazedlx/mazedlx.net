@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row">
    <div class="w-full px-4 py-2 mx-auto lg:w-1/2">

        <div class="mb-4">
            <a class="px-4 py-2 text-lg font-bold no-underline border border-gray-900 rounded-lg hover:bg-gray-900 hover:text-white" href="/">Home</a>
        </div>

        <h1 class="text-5xl font-bold prose">{{ $post->title}}</h1>

        <div class="pb-2 text-gray-500">{{$post->date->diffForHumans() }}</div>

        <x-markdown class="prose">{!! $post->markdown !!}</x-markdown>

        @include('layouts.tags')
    </div>
</div>
@stop
