<?php

/*
|--------------------------------------------------------------------------
| SEO por página (title + meta description), por nombre de ruta.
|--------------------------------------------------------------------------
| El nombre de ruta ya indica el idioma (ej. *.es / *.en), así que cada
| entrada lleva su texto en el idioma correcto. Las páginas de detalle de
| servicio no están acá: toman su meta del propio servicio ($service).
*/

return [

    'site_name' => 'Aquantica',

    // Imagen por defecto para compartir (Open Graph / Twitter). 1200x630.
    'og_image'  => '/images/og-image.jpg',

    'default' => [
        'title'       => 'Aquantica | Servicios Marinos, Buceo Comercial e Ingeniería en Cancún',
        'description' => 'Aquantica: buceo comercial, ingeniería marítima, estudios oceanográficos y servicios costeros y offshore en Cancún y el Caribe mexicano. Más de 15 años de experiencia.',
    ],

    'pages' => [

        'home' => [
            'title'       => 'Aquantica | Buceo Comercial e Ingeniería Marítima en Cancún',
            'description' => 'Soluciones marinas industriales en Cancún: buceo comercial, ingeniería marítima y soporte para los sectores marino, portuario, petrolero y científico. +15 años de experiencia.',
        ],

        // --- Contacto ---
        'contact_es' => [
            'title'       => 'Contacto | Aquantica — Servicios Marinos en Cancún',
            'description' => 'Contactá a Aquantica para tus proyectos marinos, costeros u offshore en Cancún y el Caribe mexicano. Cotizaciones y asesoría con nuestro equipo de ingeniería.',
        ],
        'contact_en' => [
            'title'       => 'Contact | Aquantica — Marine Services in Cancun',
            'description' => 'Contact Aquantica for your marine, coastal or offshore projects in Cancun and the Mexican Caribbean. Quotes and advice from our engineering team.',
        ],

        // --- Servicios costeros ---
        'coastal.services.es' => [
            'title'       => 'Servicios Costeros e Ingeniería Marítima | Aquantica Cancún',
            'description' => 'Muelles, espigones, rompeolas, recuperación de playas, arrecifes artificiales y más. Servicios costeros e ingeniería marítima en Cancún y el Caribe.',
        ],
        'coastal.services.en' => [
            'title'       => 'Coastal Services & Maritime Engineering | Aquantica Cancun',
            'description' => 'Docks, breakwaters, groins, beach recovery, artificial reefs and more. Coastal services and maritime engineering in Cancun and the Caribbean.',
        ],

        // --- Costa afuera / Offshore ---
        'offshore.services.es' => [
            'title'       => 'Servicios Costa Afuera (Offshore) | Aquantica Cancún',
            'description' => 'Mantenimiento de plataformas, inspección submarina, ánodos de sacrificio e ingeniería offshore para el sector petrolero y portuario en México.',
        ],
        'offshore.services.en' => [
            'title'       => 'Offshore Services | Aquantica Cancun',
            'description' => 'Platform maintenance, underwater inspection, sacrificial anodes and offshore engineering for the oil and port sectors in Mexico.',
        ],

        // --- Trámites ambientales / Environmental ---
        'environmental.services.es' => [
            'title'       => 'Trámites Ambientales y Proyectos Ejecutivos | Aquantica',
            'description' => 'Documentación técnica, proyectos ejecutivos y trámites ambientales para obras marinas y costeras, con cumplimiento normativo en cada fase.',
        ],
        'environmental.services.en' => [
            'title'       => 'Environmental Services & Executive Projects | Aquantica',
            'description' => 'Technical documentation, executive projects and environmental permits for marine and coastal works, with regulatory compliance at every stage.',
        ],

        // --- Estudios oceanográficos ---
        'oceanographic.studies.es' => [
            'title'       => 'Estudios Oceanográficos | Aquantica Cancún',
            'description' => 'Batimetría, modelado hidrodinámico, ingeniería costera y perforación mecánica. Estudios oceanográficos para proyectos marinos en el Caribe mexicano.',
        ],
        'oceanographic.studies.en' => [
            'title'       => 'Oceanographic Studies | Aquantica Cancun',
            'description' => 'Bathymetry, hydrodynamic modeling, coastal engineering and mechanical drilling. Oceanographic studies for marine projects in the Mexican Caribbean.',
        ],

        // --- Pruebas no destructivas / NDT ---
        'non_destructive_testing.index.es' => [
            'title'       => 'Pruebas No Destructivas (PND) Submarinas | Aquantica',
            'description' => 'Inspección y pruebas no destructivas submarinas y atmosféricas para estructuras marinas y portuarias. Diagnóstico confiable sin dañar la estructura.',
        ],
        'non_destructive_testing.index.en' => [
            'title'       => 'Non-Destructive Testing (NDT) | Aquantica',
            'description' => 'Underwater and atmospheric non-destructive testing for marine and port structures. Reliable diagnostics without damaging the structure.',
        ],

        // --- Legales (indexables, baja prioridad) ---
        'legal.terms.es'   => ['title' => 'Términos y Condiciones | Aquantica'],
        'legal.terms.en'   => ['title' => 'Terms and Conditions | Aquantica'],
        'legal.privacy.es' => ['title' => 'Política de Privacidad | Aquantica'],
        'legal.privacy.en' => ['title' => 'Privacy Policy | Aquantica'],

        // --- Sin indexar ---
        'search'      => ['title' => 'Búsqueda | Aquantica', 'noindex' => true],
        'thankyou_es' => ['title' => 'Gracias | Aquantica', 'noindex' => true],
        'thankyou_en' => ['title' => 'Thank you | Aquantica', 'noindex' => true],
    ],
];
