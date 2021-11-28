@extends('layouts.app')

@section('content')
<div class="flex-col w-3/4 mx-auto space-y-4">
    <h1 class="text-2xl">Sorry to see you go!</h1>

    <p class="prose">No bad feelings here. You can re-subscribe any time.</p>

    <a class="underline" href="{{ route('posts.index') }}">Take me to the blog!</a>
</div>
@endsection
