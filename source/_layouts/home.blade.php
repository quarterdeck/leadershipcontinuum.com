<x-main :title="$page->title" :description="$page->description" :production="$page->production">
    <x-slot name="header">
        <div class="flex justify-around items-center mt-6 px-20 z-10 relative pb-20">
            <a href="/"><img src="/img/ouroboros.svg" class="w-32" /></a>
        </div>

        <div class="mb-8 flex justify-center font-sans">
            <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg group">
                Get Involved <a href="/membership" class="font-semibold text-indigo-600 group-hover:text-white"><span class="absolute inset-0" aria-hidden="true"></span>Membership <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>

        <style>
        .group:hover {
            background: linear-gradient(
                135deg, 
                #ff77cc, #7733aa, #00aaff, #33a0bd, #c0c8ff, #ff9ac6
            );
            background-size: 400% 400%;
            animation: holographic-shift 10s ease infinite;
        }

        @keyframes holographic-shift {
            0% { background-position: 0% 50% }
            50% { background-position: 100% 50% }
            100% { background-position: 0% 50% }
        }
        </style>

        <h1 class="font-semibold text-6xl tracking-tight leading-none text-center text-gray-800 mb-5">
            The Leadership Continuum
        </h1>
        <p class="font-medium text-lg tracking-tight leading-relaxed text-center text-gray-500 max-w-sm mx-auto">
            Transforming Britain's Economic Future Through Leadership Excellence
        </p>
    </x-slot>

    @yield('content')

</x-main>