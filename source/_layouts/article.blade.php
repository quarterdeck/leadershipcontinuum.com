@extends('_layouts.main')

@section('header')
    <div class="flex justify-around items-center mt-6 px-20 z-10 relative pb-0">
        <img src="/img/ouroboros.svg" class="w-32" />
    </div>
@endsection

@section('main')
    <div class="container mx-auto prose">
        @yield('content')
    </div>
@endsection
