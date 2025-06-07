@php
    // small helper to translate label for stats already done in controller
@endphp

<div class="bg-white rounded-2xl shadow-2xl overflow-hidden mb-12">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="relative h-[300px] lg:h-full">
            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
                 class="w-full h-full object-cover">
            <div class="absolute top-3 right-3 bg-[#f5b027] text-[#0f2d49]
                        py-1 px-2 rounded-full text-xs font-medium animate-pulse">
                {{ __('offshore_services.featured_service') }}
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-2xl font-bold mb-3 text-[#f5b027]">
                {{ $service['title'] }}
            </h2>

            <p class="text-gray-600 mb-6">{{ $service['description'] }}</p>

            <div class="grid grid-cols-3 gap-3 mb-6">
                @foreach ($service['stats'] as $stat)
                    <div class="bg-[#0f2d49] p-3 rounded-lg text-center">
                        <div class="text-[#f5b027] text-xl font-bold mb-0.5">{{ $stat['value'] }}</div>
                        <div class="text-white text-xs">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>

            <div class="bg-[#0f2d49] p-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-3 text-[#f5b027]">
                    {{ __('offshore_services.key_features') }}
                </h3>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    @foreach ($service['features'] as $feat)
                        <li class="flex items-center text-white text-sm">
                            <svg class="h-4 w-4 text-[#f5b027] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $feat }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-6">
                <a href="{{ url($service['prefix'].'/'.$service['slug']) }}"
                   class="inline-block bg-[#f5b027] text-[#0f2d49] px-5 py-2 rounded-md font-semibold hover:bg-[#e0a722] transition">
                    {{ app()->getLocale() === 'en' ? 'Learn More' : 'Saber Más' }}
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </div>
</div>
