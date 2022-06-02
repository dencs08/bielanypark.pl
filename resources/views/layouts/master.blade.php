<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta')
        <link rel="canonical" href="https://www.bielanypark.pl"/>
        <link rel="apple-touch-icon" href="{{asset('images/logos/favicon.png')}}">
        <link rel="shortcut icon" href="{{asset('images/logos/favicon.png')}}" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3QYEP9Y738"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-3QYEP9Y738');
        </script>

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
    <script src="{{asset('js/app.js')}}"></script>
</html>
