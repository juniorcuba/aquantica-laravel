@extends('partials.app')

@section('content')
@php
    $backUrl = url($service['prefix']);
@endphp

{{-- ░░░░░  HERO  ░░░░░ --}}
<header x-data="{ y: 0 }"
        x-on:scroll.window="y = window.pageYOffset"
        class="relative h-[70vh] overflow-hidden">
    <img src="{{ $service['image'] }}"
         alt="{{ $service['title'] }}"
         class="absolute inset-0 w-full h-full object-cover
                transition-transform duration-700"
         :style="`transform: translateY(${y * 0.3}px)`">
    <div class="absolute inset-0 bg-gradient-to-b from-[#0f2d49]/80 to-[#0f2d49]/40 backdrop-blur-sm"></div>

    <div class="relative z-10 flex flex-col justify-end h-full pb-14">
        <div class="container mx-auto px-6 lg:px-8 max-w-4xl">
            <p class="text-sm font-medium text-[#f5b027] mb-3 tracking-wide uppercase">
                {{ __('offshore_services.featured_service') }}
            </p>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
                {{ $service['title'] }}
            </h1>
            <p class="mt-4 text-lg md:text-2xl text-gray-100">
                {{ $service['description'] }}
            </p>

            <a href="{{ $backUrl }}"
               class="mt-8 inline-flex items-center gap-2 text-[#f5b027] hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 19l-7-7 7-7" />
                </svg>
                {{ __('offshore_services.back_to_services') }}
            </a>
        </div>
    </div>
</header>

{{-- ░░░░░  STATS BAR  ░░░░░ --}}
@if($service['stats']->isNotEmpty())
<section class="sticky top-0 z-20 bg-[#0f2d49]/90 backdrop-blur shadow-md">
    <div class="container mx-auto px-4 flex flex-wrap md:grid md:grid-cols-3 text-center divide-x divide-[#f5b027]/30">
        @foreach ($service['stats'] as $stat)
            <div class="flex-1 py-4">
                <div class="text-2xl md:text-3xl font-extrabold text-[#f5b027]">{{ $stat['value'] }}</div>
                <div class="text-gray-100 text-xs tracking-wide uppercase">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>
</section>
@endif

{{-- ░░░░░  MAIN CONTENT  ░░░░░ --}}
<section class="relative py-24 bg-gray-100">
    {{-- angled bg accent --}}
    <div class="absolute inset-x-0 top-0 -translate-y-1/2 h-64 bg-gradient-to-r from-[#0f2d49] to-[#0f2d49]/70 rotate-2 origin-top"></div>

    <div class="relative container mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- info card --}}
            <div class="bg-white/80 backdrop-blur-lg rounded-3xl shadow-xl p-10"
                 x-data x-intersect="$el.classList.add('animate-fadeInUp')">
                <h2 class="text-2xl md:text-3xl font-bold text-[#0f2d49] mb-8">
                    {{ __('offshore_services.key_features') }}
                </h2>

                <ul class="space-y-4">
                    @foreach ($service['features'] as $feat)
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-[#f5b027] mr-3 mt-0.5" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-800">{{ $feat }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- slider --}}
            <div class="h-[400px]">
                @include('components.image-slider', ['images' => $service['gallery']])
            </div>
        </div>
    </div>
</section>

{{-- ░░░░░  CTA BANNER  ░░░░░ --}}
<section class="relative">
    {{-- animated dots background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-[#0f2d49] to-[#061524] overflow-hidden">
        <div class="absolute -left-10 -top-10 w-[120%] h-[120%] bg-[radial-gradient(#ffffff33_1px,transparent_1px)] bg-[size:18px_18px] animate-[spin_40s_linear_infinite]"></div>
    </div>

    <div class="relative container mx-auto px-6 lg:px-8 py-20 text-center">
        <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-6">
            {{ app()->getLocale() === 'en'
                ? 'Ready for a deep-dive inspection?'
                : '¿Listo para una inspección en profundidad?' }}
        </h3>

        <a href="/" {{-- replace with contact route --}}
           class="inline-flex items-center gap-2 bg-[#f5b027] text-[#0f2d49] px-8 py-4 rounded-full
                  font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition">
            {{ app()->getLocale() === 'en' ? 'Contact Us' : 'Contáctanos' }}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>
@endsection

