{{-- resources/views/components/about-section.blade.php --}}
<section class="bg-[#121921] py-20" id="about" x-data="{ language: '{{ app()->getLocale() }}' }">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            {{-- Imagen --}}
            <div class="relative h-[400px] md:h-[500px] rounded-lg overflow-hidden">
                <img
                    src="https://aquantica.liveblog365.com/public/images/services/coastal/underwater-welding/gallery/gallery-3.jpg"
                    alt="Marine Operations in Cancun"
                    class="w-full h-full object-cover rounded-lg"
                />
            </div>

            {{-- Contenido --}}
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">
                    {{ __('home.about.title') }}
                </h2>
                <div class="w-20 h-1 bg-[#f5b027] mb-6"></div>
                <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                    {{ __('home.about.description') }}
                </p>

                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-[#1a2736] p-4 rounded-lg">
                        <div class="text-[#f5b027] text-3xl font-bold mb-2">15+</div>
                        <div class="text-white">{{ __('home.about.years_experience') }}</div>
                    </div>
                    <div class="bg-[#1a2736] p-4 rounded-lg">
                        <div class="text-[#f5b027] text-3xl font-bold mb-2">200+</div>
                        <div class="text-white">{{ __('home.about.projects_completed') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
