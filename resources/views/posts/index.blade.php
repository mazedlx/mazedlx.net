@extends('layouts.app')

@push('og')
    {!! $og !!}

    {!! $twitter !!}
@endpush

@section('content')
<div class="flex flex-col-reverse md:flex-row">
    <div class="w-full mx-auto md:w-1/2">
        @each('layouts.article', $posts, 'post')

        {{ $posts->links('layouts.pagination') }}
    </div>

    @include('layouts.side')
</div>
@stop
