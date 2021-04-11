@extends('layouts.app')

@section('content')
<div class="flex flex-col-reverse md:flex-row">
    <div class="flex flex-wrap items-center w-1/2 h-screen mx-auto">
    @foreach ($tags as $tag => $count)
        <div class="py-2 px-4 border rounded-lg hover:bg-gray-200 mx-4 my-2
            @if ($count === 1)
                text-lg text-gray-400 border-gray-400
            @elseif ($count === 2)
                text-xl text-gray-500 border-gray-500
            @elseif ($count === 3)
                text-2xl text-gray-600 border-gray-600
            @elseif ($count === 4)
                text-3xl text-gray-700 border-gray-700
            @elseif ($count === 5)
                text-4xl text-gray-800 border-gray-800
            @elseif ($count === 6)
                text-5xl text-gray-900 border-gray-900
            @elseif ($count > 6)
                text-6xl text-black border-black
            @endif"
        >
            <a href="{{ route('tags.show', $tag) }}">{{ $tag }}</a>
        </div>
    @endforeach
    </div>
    @include('layouts.side')
</div>
@endsection
