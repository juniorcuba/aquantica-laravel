<div class="fixed top-0 left-0 right-0 bg-[#0f2d49] text-white py-2 z-50">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center">
      
      {{-- Contacto --}}
      <div class="hidden md:flex items-center space-x-6">
        <a href="mailto:comercializacion@aquantica.com.mx" class="flex items-center text-sm hover:text-[#f5b027] transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M4 4h16v16H4V4zm0 0l8 8 8-8" />
          </svg>
          comercializacion@aquantica.com.mx
        </a>
        <a href="tel:+529982097694" class="flex items-center text-sm hover:text-[#f5b027] transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M3 5a2 2 0 012-2h3.6a1 1 0 011 1v2a1 1 0 01-1 1H7v2h2.6a1 1 0 011 1v2a1 1 0 01-1 1H7v2h2.6a1 1 0 011 1v2a1 1 0 01-1 1H5a2 2 0 01-2-2V5z" />
          </svg>
          +52 998 209 7694
        </a>
      </div>

      {{-- Buscador --}}
      <div class="flex-1 mx-4 max-w-md">
        <form action="{{ route('search') }}" method="GET" class="relative">
          <input 
            type="search"
            name="q"
            placeholder="{{ app()->getLocale() === 'en' ? 'Search...' : 'Buscar...' }}"
            class="w-full bg-[#1a3655] text-white placeholder-gray-400 text-sm rounded-full py-1 px-4 pr-10 focus:outline-none focus:ring-2 focus:ring-[#f5b027]"
          />
          <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#f5b027]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
          </button>
        </form>
      </div>

      {{-- Language Switcher --}}
      <form method="POST" action="{{ route('language.switch') }}">
        @csrf
        <button type="submit" name="language" value="{{ app()->getLocale() === 'en' ? 'es' : 'en' }}" class="flex items-center space-x-1 px-2 py-1 rounded hover:bg-[#1a3655] transition-colors">
          <div class="relative w-5 h-5 rounded-sm overflow-hidden">
            <img 
              src="{{ app()->getLocale() === 'en' ? 'https://flagcdn.com/w20/mx.png' : 'https://flagcdn.com/w20/us.png' }}" 
              alt="{{ app()->getLocale() === 'en' ? 'Español' : 'English' }}" 
              width="20" height="15"
            >
          </div>
          <span class="text-sm font-medium">{{ app()->getLocale() === 'en' ? 'ES' : 'EN' }}</span>
        </button>
      </form>

    </div>
  </div>
</div>
