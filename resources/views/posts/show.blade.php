@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row">
    <div class="mx-auto w-full lg:w-1/2 xl:w-1/2 px-4 py-2">        
        <div class="font-serif text-5xl font-bold">{{ $post->title}}</div>
        <div class="font-sans text-gray-500 pb-2">{{$post->date->diffForHumans() }}</div>
        <div class="pb-2">{!! $post->contents !!}</div>
        
        @include('layouts.tags') 
    </div>    
</div>
@stop
