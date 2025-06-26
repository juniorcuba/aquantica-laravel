
<div class="flex flex-col h-full bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
    <div class="relative w-full h-48">
        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="object-cover w-full h-full" />
    </div>

    <div class="p-6 flex-grow flex flex-col">
        <h3 class="text-xl font-bold text-[#0f2d49] mb-3">{{ $service['title'] }}</h3>

        <p class="text-gray-600 text-sm mb-4 flex-grow">
            {{ strlen($service['description']) > 100 ? substr($service['description'], 0, 97) . '...' : $service['description'] }}
        </p>

        <div class="mt-auto pt-4 border-t border-gray-200">
            <a href="{{ url($service['prefix'].'/'.$service['slug']) }}"
               class="text-sm font-semibold text-[#f5b027] hover:text-[#0f2d49] transition-colors duration-200">
                {{ app()->getLocale() === 'en' ? 'Learn More' : 'Saber Más' }}
                <span aria-hidden="true"> &rarr;</span>
            </a>
        </div>
    </div>
</div>

