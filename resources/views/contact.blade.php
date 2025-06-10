@extends('partials.app')

@section('content')
<main>
    {{-- Hero Section --}}
    <section class="relative bg-[#0f2d49] py-24 md:py-32">
        <div 
            class="absolute inset-0 bg-cover bg-center opacity-20"
            style="background-image: url('https://images.pexels.com/photos/1054397/pexels-photo-1054397.jpeg?auto=compress&cs=tinysrgb&w=1280')"
        ></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">{{ __('contact.title') }}</h1>
                <p class="text-xl text-gray-300">
                    {{ __('contact.subtitle') }}
                </p>
            </div>
        </div>
    </section>

    {{-- Contact Info --}}
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Address --}}
                <div class="bg-gray-100 p-8 rounded-lg text-center hover:shadow-lg transition-shadow">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#0f2d49] text-white mb-4">
                        {{-- MapPin icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-[#0f2d49]">{{ __('contact.address_label') }}</h3>
                    <p class="text-gray-600">
                        {{ __('contact.address.line1') }}, {{ __('contact.address.line2') }} <br>
                        {{ __('contact.address.line3') }}
                    </p>
                </div>

                {{-- Email --}}
                <div class="bg-gray-100 p-8 rounded-lg text-center hover:shadow-lg transition-shadow">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#0f2d49] text-white mb-4">
                        {{-- Mail icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="M22 6 12 13 2 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-[#0f2d49]">{{ __('contact.email_label') }}</h3>
                    <p class="text-gray-600">
                        <a href="mailto:comercializacion@aquantica.com.mx" class="hover:text-[#0f2d49] transition-colors">
                            comercializacion@aquantica.com.mx
                        </a>
                    </p>
                </div>

                {{-- Phone --}}
                <div class="bg-gray-100 p-8 rounded-lg text-center hover:shadow-lg transition-shadow">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#0f2d49] text-white mb-4">
                        {{-- Phone icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                                     19.79 19.79 0 0 1-8.63-3.07
                                     19.5 19.5 0 0 1-6-6
                                     A19.79 19.79 0 0 1 2.08 4.18
                                     2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72
                                     12.05 12.05 0 0 0 .57 2.57
                                     2 2 0 0 1-.45 2.11L8.09 9.91
                                     a16 16 0 0 0 6 6l1.51-1.51
                                     a2 2 0 0 1 2.11-.45
                                     12.05 12.05 0 0 0 2.57.57
                                     A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-[#0f2d49]">{{ __('contact.phone_label') }}</h3>
                    <p class="text-gray-600">
                        <a href="tel:+529987058146" class="hover:text-[#0f2d49] transition-colors">
                            +52 998 705 8146
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Form --}}
    @include('home.Contact')

</main>
@endsection
