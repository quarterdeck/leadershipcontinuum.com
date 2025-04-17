<x-main :title="$page->title" :description="$page->description" :production="$page->production">
    <x-slot name="header">
        <div class="flex justify-around items-center mt-6 px-20 z-10 relative pb-20">
            <a href="/"><img src="/img/ouroboros.svg" class="w-32" /></a>
        </div>

        <h1 class="font-semibold text-6xl tracking-tight leading-none text-center text-gray-800 mb-5">
            Membership
        </h1>
        <p class="font-medium text-lg tracking-tight leading-relaxed text-center text-gray-500 max-w-sm mx-auto">
            Help transform Britain's economic future through leadership excellence.
        </p>
    </x-slot>

    @yield('content')

</x-main>