@extends('_layouts.main')

@section('header')
    <div class="flex justify-around items-center py-10 px-20">
        <a href="https://quarterdeck.co.uk" target="_blank">
            <img src="/img/quarterdeck.svg" class="transition-transform duration-500 ease-in-out transform hover:rotate-180 w-10 h-10" alt="World Class Leadership Training Programmes" />
        </a>
        <ul class="italic text-center divide-y divide-blue-300">
            <li class="py-1">Articles</li>
            <li class="py-1">Profiles</li>
            <li class="py-1">Quotes</li>
        </ul>
        <img src="/img/ouroboros.svg" class="max-w-sm" />
        <ul class="italic text-center divide-y divide-blue-300">
            <li class="py-1">Skills</li>
            <li class="py-1">Accreditation</li>
            <li class="py-1">Training</li>
        </ul>
        <img src="/img/{{ $page->season }}.svg" class="w-10 h-10" />
    </div>
@endsection
