<section class="bg-[#f2f2f2] py-20">
    @php
        $lang = app()->getLocale();

        $projects = [
            [
                'title' => $lang === 'en' ? 'Coastal Services' : 'Servicios Costeros',
                'description' => $lang === 'en'
                    ? 'Comprehensive solutions for coastal infrastructure, including port facilities, breakwaters, and coastal protection structures.'
                    : 'Soluciones integrales para infraestructura costera, incluyendo instalaciones portuarias, rompeolas y estructuras de protección costera.',
                'image' => 'https://images.pexels.com/photos/1254892/pexels-photo-1254892.jpeg?auto=compress&cs=tinysrgb&w=1280',
                'link'  => $lang === 'en' ? '/coastal-services' : '/servicios-costeros',
                'tags'  => [
                    __('home.services.tags.port_construction'),
                    __('home.services.tags.coastal_protection'),
                    __('home.services.tags.beach_restoration'),
                    __('home.services.tags.marina_development'),
                    __('home.services.tags.environmental_studies'),
                ],
            ],
            [
                'title' => $lang === 'en' ? 'Offshore Services' : 'Servicios Costa Afuera',
                'description' => $lang === 'en'
                    ? 'Specialized offshore engineering and maintenance services for oil & gas platforms, wind farms, and underwater structures.'
                    : 'Servicios especializados de ingeniería y mantenimiento costa afuera para plataformas petroleras, parques eólicos y estructuras submarinas.',
                'image' => 'https://images.pexels.com/photos/2144326/pexels-photo-2144326.jpeg?auto=compress&cs=tinysrgb&w=1280',
                'link'  => $lang === 'en' ? '/offshore-services' : '/servicios-costa-afuera',
                'tags'  => [
                    __('home.services.tags.platform_maintenance'),
                    __('home.services.tags.subsea_installation'),
                    __('home.services.tags.pipeline_services'),
                    __('home.services.tags.offshore_surveys'),
                ],
            ],
            [
                'title' => $lang === 'en' ? 'Environmental Services' : 'Trámites Ambientales',
                'description' => $lang === 'en'
                    ? 'Comprehensive environmental procedures and compliance solutions for marine projects, including impact assessments, permits, and monitoring services.'
                    : 'Soluciones integrales de procedimientos ambientales y cumplimiento normativo para proyectos marinos, incluyendo evaluaciones de impacto, permisos y servicios de monitoreo.',
                'image' => 'https://images.pexels.com/photos/3617457/pexels-photo-3617457.jpeg?auto=compress&cs=tinysrgb&w=1280',
                'link'  => $lang === 'en' ? '/environmental-services' : '/tramites-ambientales',
                'tags'  => [
                    __('home.services.tags.technical_assessment'),
                    __('home.services.tags.executive_projects'),
                    __('home.services.tags.environmental_permits'),
                    __('home.services.tags.compliance_monitoring'),
                ],
            ],
            [
                'title' => $lang === 'en' ? 'Oceanographic Studies' : 'Estudios Oceanográficos',
                'description' => $lang === 'en'
                    ? 'Specialized marine environment research for safe and efficient development of coastal and offshore projects, including bathymetry, drilling, and hydrodynamic modeling.'
                    : 'Investigaciones especializadas del medio marino para el desarrollo seguro y eficiente de proyectos costeros y offshore, incluyendo batimetrías, sondeos y modelación hidrodinámica.',
                'image' => 'https://images.pexels.com/photos/3894168/pexels-photo-3894168.jpeg?auto=compress&cs=tinysrgb&w=1280',
                'link'  => $lang === 'en' ? '/oceanographic-studies' : '/estudios-oceanograficos',
                'tags'  => [
                    __('home.services.tags.marine_drilling'),
                    __('home.services.tags.bathymetry'),
                    __('home.services.tags.hydrodynamic_modeling'),
                    __('home.services.tags.geotechnical_studies'),
                    __('home.services.tags.environmental_data'),
                ],
            ],
            [
                'title' => $lang === 'en' ? 'Non-Destructive Testing' : 'Pruebas No Destructivas',
                'description' => $lang === 'en'
                    ? 'Advanced inspection services to assess structural integrity without affecting functionality. Our methods guarantee early detection of failures, ensuring safety and durability of your infrastructure.'
                    : 'Servicios avanzados de inspección para evaluar la integridad estructural sin afectar la funcionalidad. Nuestros métodos garantizan la detección temprana de fallas, asegurando la seguridad y durabilidad de sus infraestructuras.',
                'image' => 'images/services/non-destructive-testing/main-service.jpg',
                'link'  => $lang === 'en' ? '/non-destructive-testing' : '/pruebas-no-destructivas',
                'tags'  => [
                    __('home.services.tags.visual_inspection'),
                    __('home.services.tags.industrial_ultrasound'),
                    __('home.services.tags.magnetic_particles'),
                    __('home.services.tags.liquid_penetrants'),
                    __('home.services.tags.structural_assessment'),
                ],
            ],
        ];
    @endphp

    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#0f2d49]">
                {{ __('home.services.title') }}
            </h2>
            <p class="text-lg text-gray-600">
                {{ __('home.services.subtitle') }}
            </p>
            <div class="w-20 h-1 bg-[#f5b027] mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 2xl:max-w-screen-2xl xl:max-w-screen-xl mx-auto">
            @foreach ($projects as $service)
                <div
                    class="bg-white rounded-lg shadow-md overflow-visible hover:shadow-lg transition-all duration-300 group relative"
                    x-data
                >
                    {{-- Banner image with gradient --}}
                    <div class="h-48 bg-cover bg-center relative"
                         style="background-image:url('{{ $service['image'] }}')">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0f2d49] via-[#0f2d49]/70 to-transparent flex items-end">
                            <h3 class="px-6 pb-6 text-2xl font-bold text-white">
                                {{ $service['title'] }}
                            </h3>
                        </div>
                    </div>

                    {{-- Card body --}}
                    <div class="p-6 flex flex-col relative min-h-[220px] overflow-visible">
                        <p class="text-gray-600 mb-6">
                            {{ $service['description'] }}
                        </p>

                        {{-- Tags --}}
                        <div class="flex flex-wrap gap-2 mb-12">
                            @foreach ($service['tags'] as $tag)
                                @if (is_string($tag))
                                    <span class="bg-gray-100 text-[#0f2d49] text-xs px-2 py-1 rounded-full">
                                        {{ $tag }}
                                    </span>
                                @else
                                    {{-- Highlighted tag with tooltip --}}
                                    <div class="relative group/tag" 
                                         x-data="{
                                            showTooltip: false,
                                            tooltipX: 0,
                                            tooltipY: 0,
                                            isMobile: window.innerWidth < 768
                                         }"
                                         x-init="
                                            window.addEventListener('resize', () => {
                                                isMobile = window.innerWidth < 768;
                                            });
                                         "
                                         @mouseover="
                                            showTooltip = true;
                                            const rect = $el.getBoundingClientRect();
                                            isMobile = window.innerWidth < 768;
                                            tooltipX = rect.left + rect.width/2;
                                            tooltipY = rect.top - 10;
                                         "
                                         @mouseleave="showTooltip = false">
                                        <span class="bg-[#f5b027] text-[#0f2d49] text-xs px-3 py-1.5 rounded-full font-medium flex items-center gap-1">
                                            <span class="relative">
                                                {{ $tag['name'] }}
                                                <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                                            </span>
                                        </span>
                                        <template x-if="!isMobile">
                                            <div x-show="showTooltip" 
                                                x-cloak
                                                class="fixed w-64 bg-[#0f2d49] text-white p-3 rounded-lg shadow-2xl z-[9999]"
                                                :style="`left: ${tooltipX}px; top: ${tooltipY - 160}px; transform: translateX(-50%);`">
                                                <p class="text-sm mb-2">{{ $tag['description'] }}</p>
                                                <div class="flex flex-wrap gap-1 mt-2">
                                                    @foreach ($tag['features'] as $feat)
                                                        <span class="text-xs bg-[#f5b027] text-[#0f2d49] px-2 py-0.5 rounded-full">
                                                            {{ $feat }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                                <div class="absolute top-full left-1/2 -translate-x-1/2 w-0 h-0 
                                                        border-l-[8px] border-l-transparent
                                                        border-r-[8px] border-r-transparent
                                                        border-t-[8px] border-t-[#0f2d49]"></div>
                                            </div>
                                        </template>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        {{-- Learn More --}}
                        <div class="absolute bottom-6 left-6">
                            <a href="{{ $service['link'] }}"
                               class="text-[#0f2d49] font-medium inline-flex items-center
                                      hover:text-[#f5b027] transition group/link">
                                {{ $lang === 'en' ? 'Learn More' : 'Más Información' }}
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="ml-2 h-4 w-4 transition-transform group-hover/link:translate-x-1"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 18l6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>