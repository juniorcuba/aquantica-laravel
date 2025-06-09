{{-- inherits the global layout --}}
@extends('partials.app')

@section('content')
@php
    $date = now()->translatedFormat('F j, Y');
@endphp
<div class="bg-gray-50 py-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">

        {{-- Header --}}
        <header class="border-b border-gray-200 pb-8 pt-20 mb-12">
            <h1 class="text-4xl font-bold text-[#0f2d49]">{{ $title }}</h1>
            <p class="mt-4 text-gray-600">
                {{ app()->getLocale()==='en' ? 'Last updated:' : 'Última actualización:' }}
                {{ $date }}
            </p>
        </header>

        {{-- Content --}}
        <article class="space-y-12">
            @foreach ($sections as $section)
                <section>
                    <h2 class="text-2xl font-semibold text-[#0f2d49] mb-4">{{ $section['h'] }}</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $section['p'] }}</p>
                </section>
            @endforeach
        </article>

        {{-- Footer --}}
        <footer class="border-t border-gray-200 pt-10 mt-14 text-center">
            <a href="{{ route('home') }}"
               class="inline-flex items-center justify-center px-6 py-3 border
                      border-[#0f2d49] rounded-md text-[#0f2d49] font-medium
                      hover:bg-[#0f2d49] hover:text-white transition">
                {{ app()->getLocale()==='en' ? 'Return Home' : 'Volver al Inicio' }}
            </a>
        </footer>
    </div>
</div>
@endsection
