<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta')
        <link rel="canonical" href="https://www.bielanypark.pl"/>
        <link rel="apple-touch-icon" href="{{asset('images/logos/favicon.png')}}">
        <link rel="shortcut icon" href="{{asset('images/logos/favicon.png')}}" />
        <link rel="stylesheet" href="css/app.css" />
        @yield('css')
        <title>@yield('title')</title>
    </head>
    <body class="antialiased">
        <x-Cursor/>
        <x-navbar/>
        <div id="swup" class="transition-fade">
            @yield('content')
            @yield('js')
        </div>
    </body>
    <script src="js/app.js"></script>
</html>