<header 
    x-data="{ isOpen: false, scrolled: false }"
    x-init="
        const handleScroll = () => {
            scrolled = window.scrollY > 1;
        };
        handleScroll();
        window.addEventListener('scroll', handleScroll);
    "
    x-bind:class="(window.location.pathname === '/' && !scrolled && !isOpen) 
        ? 'fixed w-full z-40 top-10 bg-transparent transition-all duration-300' 
        : 'fixed w-full z-40 top-10 bg-[#121921] shadow-lg transition-all duration-300'"
>
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <a href="/" class="relative w-40 h-20 block">
                <img 
                    src="{{ asset('images/logo.png') }}" 
                    alt="Aquantica Logo" 
                    class="w-full h-full object-contain" 
                    loading="lazy"
                >
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex items-center justify-center flex-1">
                <a href="{{ __('navigation.home') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors mx-4">
                    {{ __('navbar.nav_home') }}
                </a>
                <a href="{{ __('navigation.coastal_services') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors mx-4">
                    {{ __('navbar.nav_coastal_services') }}
                </a>
                <a href="{{ __('navigation.offshore_services') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors mx-4">
                    {{ __('navbar.nav_offshore_services') }}
                </a>
                <a href="{{ __('navigation.environmental_services') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors mx-4">
                    {{ __('navbar.nav_environmental_services') }}
                </a>
                <a href="{{ __('navigation.oceanographic_studies') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors mx-4">
                    {{ __('navbar.nav_oceanographic_studies') }}
                </a>
                <a href="{{ __('navigation.contact') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors mx-4">
                    {{ __('navbar.nav_contact') }}
                </a>
            </nav>

            {{-- Mobile Toggle Button --}}
            <button 
                @click="isOpen = !isOpen" 
                class="md:hidden text-white focus:outline-none"
                aria-label="Toggle menu"
            >
                <template x-if="isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </template>
                <template x-if="!isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </template>
            </button>
        </div>

        {{-- Mobile Navigation Menu --}}
        <div x-show="isOpen" class="md:hidden bg-[#121921] mt-3 rounded-lg py-4 px-2" x-transition>
            <nav class="flex flex-col space-y-4">
                <a href="{{ __('navigation.home') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors px-4 py-2" @click="isOpen = false">
                    {{ __('navbar.nav_home') }}
                </a>
                <a href="{{ __('navigation.coastal_services') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors px-4 py-2" @click="isOpen = false">
                    {{ __('navbar.nav_coastal_services') }}
                </a>
                <a href="{{ __('navigation.offshore_services') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors px-4 py-2" @click="isOpen = false">
                    {{ __('navbar.nav_offshore_services') }}
                </a>
                <a href="{{ __('navigation.environmental_services') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors px-4 py-2" @click="isOpen = false">
                    {{ __('navbar.nav_environmental_services') }}
                </a>
                <a href="{{ __('navigation.oceanographic_studies') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors px-4 py-2" @click="isOpen = false">
                    {{ __('navbar.nav_oceanographic_studies') }}
                </a>
                <a href="{{ __('navigation.contact') }}" class="text-white font-medium hover:text-[#f5b027] transition-colors px-4 py-2" @click="isOpen = false">
                    {{ __('navbar.nav_contact') }}
                </a>
            </nav>
        </div>
    </div>
</header>
