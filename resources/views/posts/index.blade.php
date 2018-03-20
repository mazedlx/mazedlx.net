@extends('layouts.app')

@section('content')
<div class="flex">
    @include('layouts.aside')

    <content class="w-3/4 p-8">
    @foreach($posts as $post)
        <article class="bg-white p-8">
            <h1>
                <a class="no-underline text-black" href="{{ $post->url }}">
                    {{ $post->title}}
                </a>
            </h1>
            <div class="pm-8">{{$post->date->diffForHumans() }}</div>
            <div>{!! $post->summary !!}</div>
            <div>Getaggt mit: {{ implode(', ', $post->tags) }}</div>
        </article>
    @endforeach
    </content>
</div>


    @include('layouts.pagination')
@stop