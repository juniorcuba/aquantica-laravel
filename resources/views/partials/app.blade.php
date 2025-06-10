<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quantica') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Favicon and touch icons  -->
    <link href="/images/ico/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="/images/ico/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="/images/ico/favicon.png" rel="shortcut icon">

   <link rel="icon" href="/images/ico/cropped-logo-aquantica-32x32.png" sizes="32x32" />
    <link rel="icon" href="h/images/ico/cropped-logo-aquantica-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/images/ico/cropped-logo-aquantica-180x180.png" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-primary-foreground transition-opacity duration-300">
        <div class="w-16 h-16 border-4 border-[#0f2d49] border-t-transparent rounded-full animate-spin"></div>
    </div>
    
    @include('components.topbar')
    <div class="min-h-screen bg-primary-foreground">
        @include('partials.navigation')

        <!-- Page Content -->
        <main class="{{ request()->routeIs('home') ? '' : 'pt-16' }}">
            @yield('content')
        </main>

        @include('partials.footer')
        @include('components.whatsapp-button')
    </div>
</body>
</html> 