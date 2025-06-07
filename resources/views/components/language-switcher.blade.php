<div class="flex items-center space-x-4">
    <a href="{{ route('home.es') }}" class="text-sm font-medium {{ app()->getLocale() === 'es' ? 'text-blue-600' : 'text-gray-500 hover:text-gray-700' }}">
        ES
    </a>
    <span class="text-gray-300">|</span>
    <a href="{{ route('home.en') }}" class="text-sm font-medium {{ app()->getLocale() === 'en' ? 'text-blue-600' : 'text-gray-500 hover:text-gray-700' }}">
        EN
    </a>
</div> 