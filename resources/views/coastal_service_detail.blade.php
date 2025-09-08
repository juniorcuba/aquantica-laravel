@extends('partials.app')

@section('content')


@php
    $prefix = app()->getLocale() === 'en' ? 'coastal-services' : 'servicios-costeros';
@endphp

<div class="container mx-auto px-4 py-12 md:py-20">

    {{-- Back link --}}
    <div class="mb-8 mt-8 md:mt-0">
        <a href="{{ url($prefix) }}"
           class="flex items-center text-[#0f2d49] hover:text-[#f5b027] transition-colors duration-200">
            <span class="mr-2">&larr;</span>
            {{ __('coastal_services.back_to_services') }}
        </a>
    </div>

    {{-- Hero / feature image --}}
    <div class="relative w-full h-64 md:h-96 rounded-lg overflow-hidden shadow-xl mb-8">
        <img src="{{ $service['image'] }}"
             alt="{{ $service['title'] }}"
             class="object-cover w-full h-full" />
    </div>

    {{-- Title --}}
    <header class="mb-8">
        <h1 class="text-3xl md:text-5xl font-bold text-[#0f2d49]">
            {{ $service['title'] }}
        </h1>
    </header>

    {{-- Description --}}
    <section class="prose prose-lg max-w-none mb-12">
        <p class="lead text-xl text-gray-700">
            {{ $service['description'] }}
        </p>
    </section>

    {{-- Two-column section --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">

        {{-- Key features --}}
        @if(isset($service['show_features']) && $service['show_features'])
        <section>
            <h2 class="text-2xl md:text-3xl font-semibold text-[#0f2d49] mb-6">
                {{ __('coastal_services.key_features') }}
            </h2>

            <ul class="space-y-6">
                @foreach ($service['features'] as $index => $feature)
                    <li class="text-gray-700">
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-[#f5b027] mr-3 flex-shrink-0 mt-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold">{{ $feature }}</span>
                        </div>
                        @if (isset($service['feature_descriptions'][$index]))
                            <p class="mt-1 ml-9 text-sm text-gray-600">
                                {{ $service['feature_descriptions'][$index] }}
                            </p>
                        @endif
                    </li>
                @endforeach
            </ul>
        </section>
        @endif

        @if (!empty($service['gallery']))
            <section class="h-[400px]">
                @include('components.image-slider', ['images' => $service['gallery']])
            </section>
        @endif
    </div>

    {{-- Description Footer --}}
    @if (!empty($service['description_footer']))
    <section class="prose prose-lg max-w-none mb-12 bg-gray-50 p-6 rounded-lg shadow-sm">
        <h2 class="text-2xl md:text-3xl font-semibold text-[#0f2d49] mb-4">
            {{ app()->getLocale() === 'en' ? 'Additional Information' : 'Información Adicional' }}
        </h2>
        <p class="text-gray-700">
            {{ $service['description_footer'] }}
        </p>
    </section>
    @endif

</div>
@endsection
