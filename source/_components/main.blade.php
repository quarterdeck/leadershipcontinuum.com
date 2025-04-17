@props(['title', 'description', 'production' => false])

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>♾️</text></svg>">
        <meta name="description" content="{{ $description }}">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="/css/main.css">
        @if ($production)
            <script src="https://cdn.usefathom.com/script.js" data-site="TTIPHZFF" defer></script>
        @endif
    </head>
    <body class="bg-yellow-50/40 text-gray-900 font-serif antialiased scroll-smooth">
        <header class="container mx-auto max-w-prose px-8 mb-10">
            {{ $header }}
        </header>
        <main class="container mx-auto px-8 prose">
            {{ $slot }}
        </main>

        <footer class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
            <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
                {{-- <a href="#" class="text-gray-600 hover:text-gray-900">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Blog</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Jobs</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Press</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Accessibility</a> --}}
                <a href="/membership" class="text-gray-600 hover:text-gray-900">Membership</a>
            </nav>
            <p class="mt-10 text-center text-sm/6 text-gray-600">&copy; {{ date('Y') }} Leadership Continuum. All rights reserved.</p>
        </footer>

    </body>
</html>
