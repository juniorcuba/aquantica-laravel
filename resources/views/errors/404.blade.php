@extends('partials.app')

@section('content')
@php
    $gifUrl = 'https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExejhsZWs1bm0wdjlybXZ5MTJiY3NxYzNydjVjMG15NnVqOGV3MjNxdCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/hX0wSyZuL1pTzfc0Pz/giphy.gif';
@endphp

<div 
    class="relative flex flex-col items-center justify-center min-h-screen text-primary-foreground overflow-hidden p-4"
    style="
        background-image: url('{{ $gifUrl }}');
        background-size: cover;
        background-position: center;
    "
>
    {{-- Dark overlay --}}
    <div class="absolute inset-0 bg-primary opacity-90 z-0"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col items-center text-center">
        <h1 
            class="text-7xl sm:text-9xl font-bold mb-4 animate-float text-secondary 
                   [text-shadow:-2px_-2px_0_hsl(var(--primary)),_2px_2px_0_hsl(0_0%_98%)]"
            style="animation-name: float;"
        >
            404
        </h1>

        <p class="text-xl sm:text-2xl text-primary-foreground mb-4">
        {{ __('not-found.not_found_title') }}
        </p>
        <p class="text-base sm:text-lg text-primary-foreground/80 mb-8 max-w-sm">
            {{ __('not-found.not_found_description') }}
        </p>

        <a 
            href="{{ route('home') }}" 
            class="px-6 py-3 bg-secondary text-secondary-foreground rounded-md font-semibold 
                   hover:bg-secondary/90 transition-colors focus:outline-none 
                   focus:ring-2 focus:ring-offset-2 focus:ring-secondary focus:ring-offset-primary"
        >
            {{ __('not-found.not_found_cta') }}
        </a>
    </div>
</div>
@endsection
