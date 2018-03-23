@extends('layouts.app')

@section('content')
<div class="flex flex-col-reverse lg:flex-row">


    <div class="w-3/4 p-8 flex flex-col">
        <content class="w-5/6 mx-auto">
            @each('layouts.article', $posts, 'post')

            @include('layouts.pagination')
        </content>
    </div>
    @include('layouts.aside')
</div>
@stop