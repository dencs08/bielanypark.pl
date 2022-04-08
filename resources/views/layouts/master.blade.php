<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <!-- <link rel="canonical" href="https://www.bisonstudio.pl"/> -->
        <link rel="apple-touch-icon" href="{{asset('images/logos/favicon.svg')}}">
        <link rel="shortcut icon" href="{{asset('images/logos/favicon.svg')}}" />
        <link rel="stylesheet" href="css/app.css" />
        @yield('css')
        <title>@yield('title')</title>
    </head>
    <body class="antialiased">
        <x-navbar/>
        <div id="web-content">
            @yield('content')
        </div>
    </body>
    <script src="js/app.js"></script>
    @yield('js')
</html>
