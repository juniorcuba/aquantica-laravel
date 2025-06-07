@extends('partials.app')

@section('content')
@php
    $prefix = app()->getLocale() === 'en' ? 'offshore-services' : 'servicios-costa-afuera';
@endphp

<div class="container mx-auto px-4 py-12 md:py-20">
    <div class="mb-8">
        <a href="{{ url($prefix) }}"
           class="flex items-center text-[#0f2d49] hover:text-[#f5b027] transition-colors duration-200">
            <span class="mr-2">&larr;</span>
            {{ __('offshore_services.back_to_services') }}
        </a>
    </div>

    <div class="relative w-full h-64 md:h-96 rounded-lg overflow-hidden shadow-xl mb-8">
        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
             class="w-full h-full object-cover">
    </div>

    <header class="mb-8">
        <h1 class="text-3xl md:text-5xl font-bold text-[#0f2d49]">
            {{ $service['title'] }}
        </h1>
    </header>

    <section class="prose prose-lg max-w-none mb-12">
        <p class="lead text-xl text-gray-700">{{ $service['description'] }}</p>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <section>
            <h2 class="text-2xl md:text-3xl font-semibold text-[#0f2d49] mb-6">
                {{ __('offshore_services.key_features') }}
            </h2>
            <ul class="space-y-4">
                @foreach (array_slice($service['features'], 0, 3) as $feature)
                    <li class="flex items-start text-gray-700">
                        <svg class="h-6 w-6 text-[#f5b027] mr-3 mt-1" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        </section>

        {{-- Optional image slider if there are gallery images --}}
        @if ($service['gallery'])
            <section class="h-[400px]">
                @include('components.image-slider', ['images' => $service['gallery']])
            </section>
        @endif
    </div>
</div>
@endsection
