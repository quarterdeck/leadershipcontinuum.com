@extends('_layouts.main')

@section('header')
    <div class="flex justify-around items-center py-10 px-20 z-10 relative pb-0">
        <a href="https://quarterdeck.co.uk" target="_blank">
            <img src="/img/quarterdeck.svg" class="transition-transform duration-500 ease-in-out transform hover:rotate-180 w-10 h-10" alt="World Class Leadership Training Programmes" />
        </a>
        <ul class="italic text-center divide-y divide-indigo-300">
            <li class="py-1 hover:text-indigo-500"><a href="/articles">Articles</a></li>
            <li class="py-1 hover:text-indigo-500"><a href="/leaders-digest">Leader's Digest</a></li>
            <li class="py-1 hover:text-indigo-500"><a href="/profiles">Profiles</a></li>
        </ul>
        <img src="/img/ouroboros.svg" class="max-w-sm" />
        <ul class="italic text-center divide-y divide-blue-300">
            <li class="py-1 hover:text-indigo-500"><a href="/skills">Skills</a></li>
            <li class="py-1 hover:text-indigo-500"><a href="/accreditation">Accreditation</a></li>
            <li class="py-1 hover:text-indigo-500"><a href="/quotes">Quotes</a></li>
        </ul>
        <img src="/img/{{ $page->season }}.svg" class="w-10 h-10" />
    </div>
    <nav class="flex justify-center font-semibold text-2xl border-y-2 border-gray-900 py-2 -translate-y-3">
        <a href="/articles" class="px-3 relative hover:text-indigo-500 border-r-[1px] border-gray-900">Articles</a>
        <a href="/leaders-digest" class="px-3 relative hover:text-indigo-500 border-r-[1px] border-gray-900">Leader's Digest</a>
        <a href="/profiles" class="px-3 relative hover:text-indigo-500 border-r-[1px] border-gray-900">Profiles</a>
        <a href="/skills" class="px-3 relative hover:text-indigo-500 border-r-[1px] border-gray-900">Skills</a>
        <a href="/accreditation" class="px-3 relative hover:text-indigo-500 border-r-[1px] border-gray-900">Accreditation</a>
        <a href="/quotes" class="px-3 relative hover:text-indigo-500">Quotes</a>
    </nav>
@endsection
