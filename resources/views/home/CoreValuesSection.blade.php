<section class="bg-[#0f2d49] py-20">
    <div class="container mx-auto px-4">
        
        {{-- Título --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">
                {{ __('home.corevalues.title') }}
            </h2>
            <div class="w-20 h-1 bg-[#f5b027] mx-auto"></div>
        </div>

        {{-- Valores --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Calidad --}}
            <div class="bg-[#1a3655] p-8 rounded-lg hover:transform hover:-translate-y-2 transition-transform duration-300">
                <div class="flex justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-[#f5b027]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="7"/>
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center">
                    {{ __('home.corevalues.quality_title') }}
                </h3>
                <p class="text-gray-300 text-center">
                    {{ __('home.corevalues.quality_description') }}
                </p>
            </div>

            {{-- Misión --}}
            <div class="bg-[#1a3655] p-8 rounded-lg hover:transform hover:-translate-y-2 transition-transform duration-300">
                <div class="flex justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-[#f5b027]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <circle cx="12" cy="12" r="6" />
                        <circle cx="12" cy="12" r="2" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center">
                    {{ __('home.corevalues.mission_title') }}
                </h3>
                <p class="text-gray-300 text-center">
                    {{ __('home.corevalues.mission_description') }}
                </p>
            </div>

            {{-- Visión --}}
            <div class="bg-[#1a3655] p-8 rounded-lg hover:transform hover:-translate-y-2 transition-transform duration-300">
                <div class="flex justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-[#f5b027]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center">
                    {{ __('home.corevalues.vision_title') }}
                </h3>
                <p class="text-gray-300 text-center">
                    {{ __('home.corevalues.vision_description') }}
                </p>
            </div>
        </div>
    </div>
</section>
