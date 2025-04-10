<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>♾️</text></svg>">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="/css/main.css">
        <script src="https://cdn.usefathom.com/script.js" data-site="TTIPHZFF" defer></script>
    </head>
    <body class="text-gray-900 font-serif antialiased">
        <header class="container mx-auto px-8">
            {{ $header }}
        </header>
        <main class="container mx-auto px-8">
            {{ $slot }}
            {{ $page->production }}
        </main>
    </body>
</html>
