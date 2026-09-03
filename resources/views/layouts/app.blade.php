<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    @stack('og')
    <a
        rel="me"
        href="https://wien.rocks/@mazedlx"
    ></a>
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased bg-gray-50">
    <div
        id="app"
        class="w-full"
    >
        <x-navigation />

        @yield('content')
    </div>
    @livewireScripts
</body>

</html>
