@extends('partials.app')

@section('content')
<div class="min-h-screen flex items-center justify-center relative">

    {{-- Background photo --}}
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image:url('/images/offshore-bg.jpg')"></div>

    {{-- Circuit overlay with blue tint --}}
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-cover bg-center opacity-30"
             style="background-image:url('/images/circuit-board.svg');
                    background-color:#0f2d49;
                    background-blend-mode:soft-light;"></div>
        <div class="absolute inset-0 bg-[#0f2d49]/75"></div>
    </div>

    {{-- Card --}}
    <div class="relative max-w-md w-full mx-auto p-8 text-center
                backdrop-blur-sm bg-[#0f2d49]/30 rounded-xl border border-white/10">

        <div class="mb-8">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-16 h-16 text-[#0f2d49] bg-white rounded-full p-2 mx-auto animate-bounce"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 12l2 2 4-4"/>
                <circle cx="12" cy="12" r="10"/>
            </svg>
        </div>

        <h1 class="text-4xl font-bold text-white mb-4">
            {{ __('thank.you_title') }}
        </h1>
        <p class="text-lg text-gray-200 mb-8">
            {{ __('thank.you_message') }}
        </p>

        <a href="{{ route('home') }}"
           class="inline-flex items-center justify-center px-6 py-3 border-2 border-white
                  text-base font-medium rounded-md text-white hover:bg-white hover:text-[#0f2d49]
                  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white
                  transition-all duration-200">
            {{ __('thank.return_home') }}
        </a>
    </div>
</div>
@endsection
