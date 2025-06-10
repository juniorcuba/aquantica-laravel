<section 
    x-data="{
        slides: [
            {
                image: 'https://images.pexels.com/photos/4439639/pexels-photo-4439639.jpeg?auto=compress&cs=tinysrgb&w=1920',
                position: 'center 30%',
                title_en: 'Industrial Marine Solutions',
                title_es: 'Soluciones Marinas Industriales',
                subtitle_en: 'Expert commercial diving and maritime engineering for marine, port, oil and scientific sectors',
                subtitle_es: 'Buceo comercial experto e ingeniería marítima para sectores marino, portuario, petrolero y científico',
                cta_en: 'Discover Our Services',
                cta_es: 'Descubrir Nuestros Servicios',
                cta_link: '{{ __('navigation.coastal_services') }}'
            },
            {
                image: 'https://images.pexels.com/photos/1098365/pexels-photo-1098365.jpeg?auto=compress&cs=tinysrgb&w=1920',
                position: 'center center',
                title_en: 'Deep Sea Operations',
                title_es: 'Operaciones en Alta Mar',
                subtitle_en: 'Delivering precision and safety in underwater engineering projects.',
                subtitle_es: 'Precisión y seguridad en proyectos de ingeniería submarina.',
                cta_en: 'Learn More',
                cta_es: 'Aprende Más',
                cta_link: '{{ __('navigation.offshore_services') }}'
            },
            {
                image: 'https://images.pexels.com/photos/70512/pexels-photo-70512.jpeg?auto=compress&cs=tinysrgb&w=1920',
                position: 'center center',
                title_en: 'Port & Oilfield Support',
                title_es: 'Soporte Portuario y Petrolero',
                subtitle_en: 'Comprehensive support for oilfield, scientific, and port operations.',
                subtitle_es: 'Soporte integral para operaciones científicas, petroleras y portuarias.',
                cta_en: 'Our Expertise',
                cta_es: 'Nuestra Experiencia',
                cta_link: '{{ __('navigation.contact') }}'
            }
        ],
        currentSlide: 0,
        language: '{{ app()->getLocale() }}',
        get current() {
            return this.slides[this.currentSlide];
        },
        changeSlide(index) {
            this.currentSlide = index;
        },
        init() {
            setInterval(() => {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            }, 5000);
        }
    }"
    x-init="init"
    class="relative h-screen flex items-center justify-center overflow-hidden"
>
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div 
            class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000"
            :class="currentSlide === index ? 'opacity-100' : 'opacity-0'"
            :style="`background-image: url('${slide.image}'); background-position: ${slide.position}`"
        >
            <div class="absolute inset-0 bg-gradient-to-r from-[#0f2d49]/90 to-[#0f2d49]/70"></div>
        </div>
    </template>

    <!-- Content -->
    <div class="container mx-auto px-4 z-10 text-white text-center md:text-left max-w-5xl relative">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="fade-in-left" style="animation: fadeInLeft 1s ease-out">
                <h1 class="text-4xl md:text-5xl lg:text-5xl 2xl:text-6xl font-bold mb-4 leading-tight">
                    <span x-text="language === 'en' ? current.title_en : current.title_es"></span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200">
                    <span x-text="language === 'en' ? current.subtitle_en : current.subtitle_es"></span>
                </p>
                <a 
                    :href="current.cta_link"
                    class="inline-flex items-center bg-[#f5b027] text-[#0f2d49] px-6 py-3 rounded-md font-medium hover:bg-[#d99c22] transition-colors"
                >
                    <span x-text="language === 'en' ? current.cta_en : current.cta_es"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="hidden md:block fade-in-right" style="animation: fadeInRight 1s ease-out">
                <!-- Optional visual element -->
            </div>
        </div>
    </div>

    <!-- Indicators -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button 
                @click="changeSlide(index)"
                class="w-2 h-2 rounded-full transition-all duration-300"
                :class="currentSlide === index ? 'bg-[#f5b027] w-6' : 'bg-white/50'"
            ></button>
        </template>
    </div>
</section>
