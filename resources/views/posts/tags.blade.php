@extends('layouts.app')

@section('content')
<div class="flex flex-col-reverse lg:flex-row">
    <div class="flex flex-col w-3/4 p-8">
        <content class="w-5/6 mx-auto">
            @each('layouts.article', $posts, 'post')
        </content>
    </div>
    @include('layouts.side')
</div>
@stop
