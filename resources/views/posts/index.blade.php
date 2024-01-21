@extends('layouts.app')

@push('og')
{!! $og !!}

{!! $twitter !!}
@endpush

@section('content')
<x-page>
    <div class="prose">
        <h1>
            Latest blog posts
        </h1>
        <p>
            Sometimes Code, sometimes not. Mostly English, manchmal nicht.
        </p>
    </div>
    <div class="grid gap-16 pt-12 mt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
        @each('layouts.article', $posts, 'post')

        {{ $posts->links('layouts.pagination') }}
    </div>
</x-page>
@endsection
