@extends('layouts.app')

@push('og')
{!! $og !!}

{!! $twitter !!}
@endpush

@section('content')
<div class="flex flex-col-reverse md:flex-row">
    <div class="w-full mx-auto md:w-1/2">
        <div class="px-4 pt-16 pb-20 bg-white sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                <div>
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Latest blog posts
                    </h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                        Sometimes Code, sometimes not. Mostly English, manchmal nicht.
                    </p>
                </div>
                <div class="grid gap-16 pt-12 mt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                    @each('layouts.article', $posts, 'post')

                    {{ $posts->links('layouts.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
