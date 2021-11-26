@extends('layouts.app')

@section('content')
<div class="flex-col w-3/4 mx-auto space-y-4">
    <h1 class="text-2xl">Thanks for confirming your subscription!</h1>

    <a class="underline" href="{{ route('posts.index') }}">Take me to the blog!</a>
</div>
@endsection
