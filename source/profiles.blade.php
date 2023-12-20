@extends('_layouts.main')

@section('header')
	<div class="flex justify-around items-center mt-6 px-20 z-10 relative pb-0">
		<a href="https://quarterdeck.co.uk" target="_blank">
			<img src="/img/quarterdeck.svg" class="transition-transform duration-500 ease-in-out transform hover:rotate-180 w-10 h-10" alt="World Class Leadership Training Programmes" />
		</a>
		<a href="/">
			<img src="/img/ouroboros-banner.svg" class="w-64" />
		</a>
		<img src="/img/{{ $page->season }}.svg" class="w-10 h-10" />
	</div>
	<nav class="flex justify-center font-semibold text-2xl border-y-2 border-gray-900 py-2 -translate-y-3">
		<a href="/quotes" class="px-3 relative hover:text-indigo-500">Profiles</a>
	</nav>
@endsection

@section('main')
	@foreach($profiles as $profile)
		<h2><a href="{{ $profile->getUrl() }}">{{ $profile->title }}</a></h2>
	@endforeach
@endsection
