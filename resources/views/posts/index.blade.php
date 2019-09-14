@extends('layouts.app')

@section('content')
<div class="flex md:flex-row flex-col-reverse">
    <div class="w-full md:w-2/3 lg:w-3/4 xl:w-4/5">
        @each('layouts.article', $posts, 'post')

        {{ $posts->links('layouts.pagination') }}
    </div>
    @include('layouts.side')
</div>
@stop