@extends('layouts.app')

@section('content')
<x-page>
    <div class="prose">
        <h1>Talks</h1>
        <p>Over the years I've given a few talks on PHP and related topics.</p>
    </div>

    <div class="grid prose lg:grid-cols-2">
        <div class="flex flex-col space-y-2">
            <h2>What's new in PHP8.1</h2>
            <a href="https://speakerdeck.com/mazedlx/whats-new-in-php8-dot-1">https://speakerdeck.com/mazedlx/whats-new-in-php8-dot-1</a>
        </div>
        <div class="flex flex-col space-y-2">
            <h2>GraphQL</h2>
            <a href="https://speakerdeck.com/mazedlx/graphql">https://speakerdeck.com/mazedlx/graphql</a>
        </div>
        <div class="flex flex-col space-y-2">
            <h2>How to not f*ck up your day</h2>
            <a href="https://speakerdeck.com/mazedlx/how-to-not-fuck-up-your-day">https://speakerdeck.com/mazedlx/how-to-not-fuck-up-your-day</a>
        </div>
        <div class="flex flex-col space-y-2">
            <h2>Livewire. It's like Vue or React. Without the JavaScript.</h2>
            <a href="https://speakerdeck.com/mazedlx/livewire-its-like-vue-or-react-without-the-javascript">https://speakerdeck.com/mazedlx/livewire-its-like-vue-or-react-without-the-javascript</a>
        </div>
        <div class="flex flex-col space-y-2">
            <h2>PHP 7.3 && Laravel 5.7</h2>
            <a href="https://speakerdeck.com/mazedlx/php-7-dot-3-and-and-laravel-5-dot-7">https://speakerdeck.com/mazedlx/php-7-dot-3-and-and-laravel-5-dot-7</a>
        </div>
        <div class="flex flex-col space-y-2">
            <h2>Almost Everything That's Wrong With Wordpress </h2>
            <a href="https://speakerdeck.com/mazedlx/almost-everything-thats-wrong-with-wordpress">https://speakerdeck.com/mazedlx/almost-everything-thats-wrong-with-wordpress</a>
        </div>
        <div class="flex flex-col space-y-2">
            <h2>What's new in Laravel 5.5?</h2>
            <a href="https://speakerdeck.com/mazedlx/whats-new-in-laravel-5-dot-5">https://speakerdeck.com/mazedlx/whats-new-in-laravel-5-dot-5</a>
        </div>
    </div>
</x-page>
@endsection
