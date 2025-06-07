@php
    $language = session('language', app()->getLocale()); // idioma actual
@endphp

<button
    x-data
    @click="
        // Simple toggle local, idealmente aquí llamarías un método que haga el cambio real (fetch, Livewire, etc)
        let newLang = '{{ $language }}' === 'en' ? 'es' : 'en';
        window.location.href = '/language/' + newLang; // o tu ruta para cambiar idioma
    "
    class="flex items-center space-x-1 px-2 py-1 rounded hover:bg-[#1a3655] transition-colors"
    aria-label="{{ $language === 'en' ? 'Cambiar a Español' : 'Switch to English' }}"
    type="button"
>
    <div class="relative w-5 h-5 rounded-sm overflow-hidden">
        @if ($language === 'en')
            <img src="https://flagcdn.com/w20/mx.png" alt="Español" class="object-cover w-full h-full" />
        @else
            <img src="https://flagcdn.com/w20/us.png" alt="English" class="object-cover w-full h-full" />
        @endif
    </div>
    <span class="text-sm font-medium">{{ $language === 'en' ? 'ES' : 'EN' }}</span>
</button>
