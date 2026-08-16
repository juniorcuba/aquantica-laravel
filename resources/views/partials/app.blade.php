<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- helpers required *before* Alpine initialises --}}
    @stack('alpine-helpers')

    {{-- Alpine itself --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- ===== SEO ===== --}}
    @php
        $seoCfg  = config('seo');
        $routeN  = optional(request()->route())->getName();
        $page    = $seoCfg['pages'][$routeN] ?? [];

        // Solo las páginas de DETALLE (*.show.*) toman el meta del propio $service.
        // (En los listados, $service queda del @foreach y no debe usarse.)
        $isDetail = \Illuminate\Support\Str::contains((string) $routeN, '.show.');
        $svc      = ($isDetail && isset($service) && is_array($service)) ? $service : null;
        $svcTitle = $svc['title'] ?? $svc['name'] ?? null;
        $svcDesc  = $svc['description'] ?? null;
        $svcImg   = $svc['image'] ?? $svc['hero_image'] ?? null;

        $seoTitle = $page['title']
            ?? ($svcTitle ? $svcTitle.' | '.$seoCfg['site_name'] : $seoCfg['default']['title']);
        $seoDesc  = $page['description']
            ?? ($svcDesc ? \Illuminate\Support\Str::limit(trim(strip_tags($svcDesc)), 155) : $seoCfg['default']['description']);
        $seoImg   = url($page['og_image'] ?? $svcImg ?? $seoCfg['og_image']);
        $seoUrl   = url()->current();
        $seoRobots = ($page['noindex'] ?? false) ? 'noindex, follow' : 'index, follow, max-image-preview:large, max-snippet:-1';
        $ogLocale = app()->getLocale() === 'en' ? 'en_US' : 'es_MX';
        $isDefaultOg = $seoImg === url($seoCfg['og_image']); // solo la de marca es 1200x630
    @endphp

    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDesc }}">
    <meta name="robots" content="{{ $seoRobots }}">
    <link rel="canonical" href="{{ $seoUrl }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $seoCfg['site_name'] }}">
    <meta property="og:locale" content="{{ $ogLocale }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDesc }}">
    <meta property="og:url" content="{{ $seoUrl }}">
    <meta property="og:image" content="{{ $seoImg }}">
    @if($isDefaultOg)
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    @endif

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDesc }}">
    <meta name="twitter:image" content="{{ $seoImg }}">

    {{-- Datos estructurados: Organización / Negocio --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context'   => 'https://schema.org',
        '@type'      => 'Organization',
        'name'       => 'Aquantica',
        'legalName'  => 'Ingeniería y Proyectos Marinos S.A. de C.V.',
        'url'        => url('/'),
        'logo'       => url('/images/logo.png'),
        'image'      => url($seoCfg['og_image']),
        'description'=> $seoCfg['default']['description'],
        'email'      => 'comercializacion@aquantica.com.mx',
        'telephone'  => '+52 998 705 8146',
        'address'    => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Cancún',
            'addressRegion'   => 'Quintana Roo',
            'addressCountry'  => 'MX',
        ],
        'areaServed' => 'MX',
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    {{-- ===== /SEO ===== --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon and touch icons  -->
    <link href="/images/ico/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="/images/ico/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="/images/ico/favicon.png" rel="shortcut icon">

   <link rel="icon" href="/images/ico/cropped-logo-aquantica-32x32.png" sizes="32x32" />
    <link rel="icon" href="/images/ico/cropped-logo-aquantica-192x192.png" sizes="192x192" />
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
        <main class="mt-8 {{ request()->routeIs('home') ? '' : 'pt-16' }}">
            @yield('content')
        </main>

        @include('partials.footer')
        @include('components.whatsapp-button')
    </div>
</body>
</html> 