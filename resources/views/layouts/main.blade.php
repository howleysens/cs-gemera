<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jura:wght@300..700&display=swap"
            rel="stylesheet"
        />
        <title>@yield('title')</title>
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        @yield('content')
    </body>
</html>
