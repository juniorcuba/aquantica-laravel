<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ $service['title'] }} | {{ __('coastal_services.coastal_services_title') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Alpine for the image slider --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="antialiased text-gray-800">

@php
    $prefix = app()->getLocale() === 'en' ? 'coastal-services' : 'servicios-costeros';
@endphp

<div class="container mx-auto px-4 py-12 md:py-20">

    {{-- Back link --}}
    <div class="mb-8">
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
        <section>
            <h2 class="text-2xl md:text-3xl font-semibold text-[#0f2d49] mb-6">
                {{ __('coastal_services.key_features') }}
            </h2>

            <ul class="space-y-4">
                @foreach (array_slice($service['features'], 0, 3) as $feature)
                    <li class="flex items-start text-gray-700">
                        <svg class="h-6 w-6 text-[#f5b027] mr-3 flex-shrink-0 mt-1" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        </section>

        {{-- Image slider --}}
        <section class="h-[400px]">
            <div x-data="{
                    images: {{ json_encode($service['gallery']) }},
                    current: 0,
                    prev()  { this.current = this.current === 0 ? this.images.length - 1 : this.current - 1 },
                    next()  { this.current = this.current === this.images.length - 1 ? 0 : this.current + 1 }
                }"
                class="relative group h-full w-full">

                {{-- Slide --}}
                <div class="relative h-full w-full rounded-2xl overflow-hidden">
                    <img :src="images[current]"
                         :alt='`Slide ${current+1}`'
                         class="object-cover w-full h-full transition-all duration-300" />
                </div>

                {{-- Arrows --}}
                <button @click="prev"
                        class="hidden group-hover:block absolute top-1/2 -translate-y-1/2 left-2
                               p-2 rounded-full bg-black/50 text-white hover:bg-black/70">
                    &larr;
                </button>
                <button @click="next"
                        class="hidden group-hover:block absolute top-1/2 -translate-y-1/2 right-2
                               p-2 rounded-full bg-black/50 text-white hover:bg-black/70">
                    &rarr;
                </button>

                {{-- Dots --}}
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                    <template x-for="(img, idx) in images" :key="idx">
                        <button @click="current = idx"
                                :class="current === idx ? 'bg-white' : 'bg-white/50'"
                                class="w-2 h-2 rounded-full"></button>
                    </template>
                </div>
            </div>
        </section>
    </div>

</div>
</body>
</html>
