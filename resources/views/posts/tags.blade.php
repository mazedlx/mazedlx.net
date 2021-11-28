@extends('layouts.app')

@section('content')
<div class="flex flex-col-reverse lg:flex-row">
    <div class="w-full mx-auto md:w-1/2">
        @each('layouts.article', $posts, 'post')
    </div>

    @include('layouts.side')
</div>
@endsection
