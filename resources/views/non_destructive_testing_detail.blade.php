@extends('partials.app')

@section('content')

<div class="container mx-auto px-4 py-12 md:py-20">

    {{-- Back link --}}
    <div class="mb-8">
        <a href="{{ url($prefix) }}"
           class="flex items-center text-[#0f2d49] hover:text-[#f5b027] transition-colors duration-200">
            <span class="mr-2">&larr;</span>
            {{ __('non_destructive_testing.back_to_services') }}
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
                {{ __('non_destructive_testing.key_features') }}
            </h2>
            
            {{-- Features with descriptions --}}
            <div class="space-y-6">
                @foreach ($service['features'] as $index => $feature)
                    <div class="border-l-4 border-[#f5b027] pl-4">
                        <h3 class="font-semibold text-lg text-[#0f2d49] mb-2">
                            {{ $feature }}
                        </h3>
                        @if(isset($service['feature_descriptions'][$index]))
                            <p class="text-gray-700 text-sm leading-relaxed">
                                {{ $service['feature_descriptions'][$index] }}
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>
        </section>
        @endif

        {{-- Optional image slider if there are gallery images --}}
        @if ($service['gallery'])
            <section class="h-[400px]">
                @include('components.image-slider', ['images' => $service['gallery']])
            </section>
        @endif
    </div>

    {{-- Footer description --}}
    @if($service['description_footer'])
    <section class="bg-gray-50 p-6 md:p-8 rounded-lg">
        <p class="text-gray-700 leading-relaxed">
            {{ $service['description_footer'] }}
        </p>
    </section>
    @endif

</div>
@endsection