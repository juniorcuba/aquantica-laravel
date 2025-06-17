@extends('partials.app')

@section('content')

{{-- Hero --}}
<section class="relative bg-[#0f2d49] py-24 md:py-32">
    <div class="absolute inset-0 bg-cover bg-center opacity-20"
         style="background-image:url('https://images.pexels.com/photos/2144326/pexels-photo-2144326.jpeg?auto=compress&cs=tinysrgb&w=1280')">
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
            {{ __('offshore_services.offshore_services_title') }}
        </h1>
        <p class="text-xl text-gray-300">
            {{ __('offshore_services.offshore_services_subtitle') }}
        </p>
    </div>
</section>

{{-- Content --}}
<section class="py-20 bg-gray-100">
  <div class="container mx-auto px-4">

      {{-- Featured card (if any) --}}
      @isset($featured)
          @include('components.featured-service', ['service' => $featured])
      @endisset

      {{-- Grid --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach ($other as $service)
              @include('components.service-item-details', ['service' => $service])
          @endforeach
      </div>
  </div>
</section>
@endsection
