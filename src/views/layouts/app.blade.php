<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('superblog/css/app.css') }}" rel="stylesheet">
 
</head>
<body>
    <div id="app" class="container-fluid bg-color-dark">
        <main>
            @yield('content')
        </main>
        <!--include('superblog::Plugins.Library.Uploader.widgets.uploader')--> 
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('superblog/js/Themes/Library/Request.js') }}" defer></script>
</body>
</html>
 