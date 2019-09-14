@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row">
    <div class="w-full px-4 py-2 md:w-2/3 lg:w-3/4 xl:w-4/5">        
        <div class="font-serif text-2xl font-bold">{{ $post->title}}</div>
        <div class="font-sans text-gray-500 pb-2">{{$post->date->diffForHumans() }}</div>
        <div class="font-sans text-gray-900 pb-2 leading-loose">{!! $post->contents !!}</div>
        
        @include('layouts.tags') 
    </div>    
    
    @include('layouts.side')
</div>
@stop
