@extends('partials.app')

@section('content')

    {{-- Hero --}}
    <section class="relative bg-cover bg-center py-32 md:py-48 text-white"
             style="background-image:url('{{ asset('images/services/environmental-services/category-banner.jpg') }}')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                {{ __('environmental_services.environmental_services_title') }}
            </h1>
            <p class="text-lg md:text-2xl mb-8">
                {{ __('environmental_services.environmental_services_subtitle') }}
            </p>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    @include('components.service-item-details', ['service' => $service])
                @endforeach
            </div>
        </div>
    </section>

@endsection 