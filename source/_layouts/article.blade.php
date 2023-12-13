@extends('_layouts.main')

@section('header')
    <div class="my-6 text-center">
        <a href="/" class="inline-block"><img src="/img/ouroboros.svg" class="w-32" /></a>
    </div>
@endsection

@section('main')
    <div class="container mx-auto py-3 border-t-2 border-b border-t-gray-900 border-b-gray-300 mb-8">
        <div class="mb-3">
            <h2 class="uppercase font-bold inline text-sm"><a href="/articles">Articles</a></h2> |
            <time datetime="{{ date(DATE_ISO8601, $page->getModifiedTime()) }}">{{ date('D jS F Y g:ia', $page->getModifiedTime()) }}</time>
        </div>
        <h1 class="text-4xl">{{ $page->title }}</h1>
        <h2 class="text-4xl text-gray-400">{{ $page->subtitle }}</h2>
    </div>
    <div class="container mx-auto">
        <div class="prose">
            {!! $page->getContent() !!}
        </div>
    </div>
@endsection
