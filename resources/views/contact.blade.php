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
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">@lang('contact_title')</h1>
                <p class="text-xl text-gray-300">
                    @if (App::getLocale() === 'en')
                        Get in touch with our team of experts for your industrial marine needs.
                    @else
                        Póngase en contacto con nuestro equipo de expertos para sus necesidades marinas industriales.
                    @endif
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
                    <h3 class="text-xl font-bold mb-2 text-[#0f2d49]">@lang('contact_address')</h3>
                    <p class="text-gray-600">
                        123 Industrial Way<br />
                        Port City, PC 12345<br />
                        Country
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
                    <h3 class="text-xl font-bold mb-2 text-[#0f2d49]">@lang('contact_email_label')</h3>
                    <p class="text-gray-600">
                        <a href="mailto:info@quantica.com" class="hover:text-[#0f2d49] transition-colors">
                            info@quantica.com
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
                    <h3 class="text-xl font-bold mb-2 text-[#0f2d49]">@lang('contact_phone_label')</h3>
                    <p class="text-gray-600">
                        <a href="tel:+15555555555" class="hover:text-[#0f2d49] transition-colors">
                            +1 (555) 555-5555
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <div class="aspect-w-16 aspect-h-9 w-full h-[400px]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.782778526196!2d-74.0066967!3d40.7060855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1649895555%3A0x6dae1ea24eb6a6f5!2sPort%20Authority%20of%20New%20York%20and%20New%20Jersey!5e0!3m2!1sen!2sus!4v1651234567890!5m2!1sen!2sus" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Company Location"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Form --}}
    @include('home.Contact')

</main>
@endsection
