<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link nonce="{{ csp_nonce() }}" href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Source+Code+Pro|Spectral" rel="stylesheet">
    
        <!-- Scripts -->
    <script nonce="{{ csp_nonce() }}" defer src="{{ mix('js/manifest.js') }}"></script>
    <script nonce="{{ csp_nonce() }}" defer src="{{ mix('js/vendor.js') }}"></script>
    <script nonce="{{ csp_nonce() }}" defer src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div id="app" class="w-full bg-gray-100">
        @yield('content')
    </div>
</body>
</html>
