@extends('layouts.app')

@section('content')
<div class="flex flex-col-reverse md:flex-row">
    <div class="w-full mx-auto md:w-1/2">
        <div class="px-4 pt-16 pb-20 bg-white sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                <div>
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Talks
                    </h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                        Over the years I've given a few talks on PHP and related topics.
                    </p>
                </div>

                <div class="grid gap-16 pt-12 mt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                    <div class="flex flex-col space-y-2">
                        <span class="text-2xl font-bold">What's new in PHP8.1</span>
                        <a href="https://speakerdeck.com/mazedlx/whats-new-in-php8-dot-1">https://speakerdeck.com/mazedlx/whats-new-in-php8-dot-1</a>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <span class="text-2xl font-bold">GraphQL</span>
                        <a href="https://speakerdeck.com/mazedlx/graphql">https://speakerdeck.com/mazedlx/graphql</a>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <span class="text-2xl font-bold">How to not f*ck up your day</span>
                        <a href="https://speakerdeck.com/mazedlx/how-to-not-fuck-up-your-day">https://speakerdeck.com/mazedlx/how-to-not-fuck-up-your-day</a>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <span class="text-2xl font-bold">Livewire. It's like Vue or React. Without the JavaScript.</span>
                        <a href="https://speakerdeck.com/mazedlx/livewire-its-like-vue-or-react-without-the-javascript">https://speakerdeck.com/mazedlx/livewire-its-like-vue-or-react-without-the-javascript</a>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <span class="text-2xl font-bold">PHP 7.3 && Laravel 5.7</span>
                        <a href="https://speakerdeck.com/mazedlx/php-7-dot-3-and-and-laravel-5-dot-7">https://speakerdeck.com/mazedlx/php-7-dot-3-and-and-laravel-5-dot-7</a>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <span class="text-2xl font-bold">Almost Everything That's Wrong With Wordpress </span>
                        <a href="https://speakerdeck.com/mazedlx/almost-everything-thats-wrong-with-wordpress">https://speakerdeck.com/mazedlx/almost-everything-thats-wrong-with-wordpress</a>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <span class="text-2xl font-bold">What's new in Laravel 5.5?</span>
                        <a href="https://speakerdeck.com/mazedlx/whats-new-in-laravel-5-dot-5">https://speakerdeck.com/mazedlx/whats-new-in-laravel-5-dot-5</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
