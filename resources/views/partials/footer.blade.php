<footer class="bg-[#0f2d49] text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Company Info --}}
            <div>
                <a href="/" class="relative w-40 block mb-4">
                    <img 
                        src="{{ asset('images/logo.png') }}" 
                        alt="Aquantica Logo" 
                        class="w-full h-full object-contain" 
                        loading="lazy"
                    >
                </a>
                <p class="text-gray-300 mb-4">
                    {{ Str::limit(__('footer.about'), 120, '...') }}
                </p>
            </div>

            {{-- Quick Links --}}
            <div class="text-left fit-content mx-auto w-fit">
                <h3 class="text-xl font-bold mb-4">{{ __('footer.services') }}</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ __('navigation.coastal_services') }}">
                            {{ __('navbar.nav_coastal_services') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ __('navigation.offshore_services') }}">
                            {{ __('navbar.nav_offshore_services') }}
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h3 class="text-xl font-bold mb-4">{{ __('footer.contact') }}</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-[#f5b027]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                        <span class="text-gray-300">{{ __('footer.location') }}</span>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-[#f5b027]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="M22 6 12 13 2 6" />
                        </svg> 
                        <a href="mailto:comercializacion@aquantica.com.mx" class="text-gray-300 hover:text-[#f5b027] transition-colors">
                            {{ __('footer.email') }}
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-[#f5b027]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.08 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72 12.05 12.05 0 0 0 .57 2.57 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.51-1.51a2 2 0 0 1 2.11-.45 12.05 12.05 0 0 0 2.57.57A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <a href="tel:+529987058146" class="text-gray-300 hover:text-[#f5b027] transition-colors">
                            {{ __('footer.phone') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Footer Bottom --}}
        <div class="border-t border-gray-700 mt-12 pt-6 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">
                © {{ date('Y') }} Aquantica. {{ __('footer.rights') }}
            </p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="/privacy-policy" class="text-gray-400 text-sm hover:text-[#f5b027] transition-colors">
                    {{ __('footer.privacy') }}
                </a>
                <a href="/terms-of-service" class="text-gray-400 text-sm hover:text-[#f5b027] transition-colors">
                    {{ __('footer.terms') }}
                </a>
            </div>
        </div>
    </div>
</footer>
