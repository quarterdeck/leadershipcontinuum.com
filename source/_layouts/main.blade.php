<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="text-gray-900 font-serif antialiased">
        <header class="container mx-auto">
            @yield('header')
        </header>
        <main>
            @yield('main')
        </main>
    </body>
</html>
