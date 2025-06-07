@extends('partials.app')

@section('content')
<div class="min-h-screen bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">{{ __('translations.home.title') }}</h1>
            <p class="text-xl text-gray-400">{{ __('translations.home.subtitle') }}</p>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">{{ __('translations.services.coastal.title') }}</h2>
                <p class="text-gray-400 mb-6">{{ __('translations.services.coastal.subtitle') }}</p>
                <a href="" class="inline-block bg-blue-600 text-white rounded-full py-2 px-4 hover:bg-blue-700 transition-all duration-300">
                    {{ __('translations.services.coastal.title') }}
                </a>
            </div>

            <div class="bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">{{ __('translations.services.offshore.title') }}</h2>
                <p class="text-gray-400 mb-6">{{ __('translations.services.offshore.subtitle') }}</p>
                <a href="" class="inline-block bg-blue-600 text-white rounded-full py-2 px-4 hover:bg-blue-700 transition-all duration-300">
                    {{ __('translations.services.offshore.title') }}
                </a>
            </div>
        </div>

        <div class="mt-16">
            <div class="bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">{{ __('translations.contact.title') }}</h2>
                <p class="text-gray-400 mb-6">{{ __('translations.contact.description') }}</p>
                <a  class="inline-block bg-blue-600 text-white rounded-full py-2 px-4 hover:bg-blue-700 transition-all duration-300">
                    {{ __('translations.contact.title') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 