@php
    $language = session('locale', app()->getLocale()); // idioma actual
@endphp

<form method="POST" action="{{ route('language.switch') }}" class="inline">
    @csrf
    <input type="hidden" name="language" value="{{ $language === 'en' ? 'es' : 'en' }}">
    <button
        type="submit"
        class="flex items-center space-x-1 px-2 py-1 rounded hover:bg-[#1a3655] transition-colors"
        aria-label="{{ $language === 'en' ? 'Cambiar a Español' : 'Switch to English' }}"
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
</form>
