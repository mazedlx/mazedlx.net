@extends('layouts.app')

@section('content')
<div class="flex">
    @include('layouts.aside')
    <div class="w-3/4 p-8 flex flex-col">
        <content class="w-3/4 p-8">
            <article class="bg-white py-4">
                <div class="text-4xl font-serif font-bold">{{ $post->title}}</div>
                <div class="py-4 font-sans">{{$post->date->diffForHumans() }}</div>
                <div class="py-4 text-justify leading-loose font-sans">
                    {!! $post->contents !!}
                </div>
                @include('layouts.tags')

            </article>
        </content>
    </div>
</div>


    @include('layouts.pagination')
@stop
