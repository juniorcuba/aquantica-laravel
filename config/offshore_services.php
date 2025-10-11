<?php

return [
    // ROV Service - HIDDEN (no real info available)
    // [
    //     'title_key'       => 'service_rov',
    //     'description_key' => 'service_rov_desc',
    //     'featured'        => true,
    //     'image'           => 'https://images.pexels.com/photos/4004374/pexels-photo-4004374.jpeg?auto=compress&cs=tinysrgb&w=1280',
    //     'features'        => [...],
    //     'gallery_images'  => [...],
    //     'stats'           => [...],
    // ],
    [
        'title_key'       => 'service_platform_maintenance',
        'description_key' => 'service_platform_maintenance_desc',
        'description_footer_key' => 'service_platform_maintenance_footer',
        'featured'        => false,
        'image'           => '/images/services/offshore/platform-maintenance/main-service.jpg',
        'hero_image'      => '/images/services/offshore/platform-maintenance/hero-image.jpg',
        'features'        => [
            'Structural protection and coating',
            'Structural maintenance and reinforcement',
            'Operational safety systems',
            'Inspection and quality control',
            'Industrial equipment supply',
        ],
        'gallery_images'  => [
            '/images/services/offshore/platform-maintenance/gallery/gallery-1.jpg',
            '/images/services/offshore/platform-maintenance/gallery/gallery-2.jpg',
            '/images/services/offshore/platform-maintenance/gallery/gallery-3.jpg',
            '/images/services/offshore/platform-maintenance/gallery/gallery-4.png',
            '/images/services/offshore/platform-maintenance/hero-image.jpg'
        ],
        'stats'           => [
            ['value' => '24/7', 'label_key' => 'stat_operation'],
            ['value' => '100%', 'label_key' => 'stat_compliance'],
            ['value' => '15+',  'label_key' => 'stat_experience'],
        ],
        'show_features'   => true,
    ],
    [
        'title_key'       => 'service_sacrificial_anodes',
        'description_key' => 'service_sacrificial_anodes_desc',
        'description_footer_key' => 'service_sacrificial_anodes_footer',
        'image'           => '/images/services/offshore/sacrificial-anodes/main-service.jpg',
        'hero_image'      => '/images/services/offshore/sacrificial-anodes/hero-image.jpg',
        'features'        => [
            'Cathodic protection solutions',
            'Zinc anodes for hot water tanks',
            'Hanging anodes for non-grounded parts',
            'Bow thruster anodes',
            'Split anodes for shafts',
            'Rudder and flap configurations',
            'Hull protection anodes',
            'Material selection for different environments'
        ],
        'gallery_images'  => [
            '/images/services/offshore/sacrificial-anodes/gallery/gallery-1.jpg',
            '/images/services/offshore/sacrificial-anodes/hero-image.jpg',
        ],
        'show_features'   => true,
    ],
    [
        'title_key'       => 'service_tanker_cruise_maintenance',
        'description_key' => 'service_tanker_cruise_maintenance_desc',
        'description_footer_key' => 'service_tanker_cruise_maintenance_footer',
        'featured'        => false,
        'image'           => '/images/services/offshore/tanker-cruise-maintenance/main-service.jpg',
        'hero_image'      => '/images/services/offshore/tanker-cruise-maintenance/hero-image.jpg',
        'features'        => [
            'Inspección detallada con equipos de última generación y técnicas no destructivas',
            'Inspección del casco y estructuras: evaluación completa del estado del casco, tanques y soldaduras',
            'Sistemas de propulsión y maquinaria: revisión exhaustiva de motores y sistemas auxiliares',
            'Programas de mantenimiento a la medida adaptados a las necesidades específicas',
            'Mantenimiento en puerto y dique seco para atención completa',
            'Reparación de casco y superestructura: soldadura, reemplazo de placas y tratamiento de corrosión',
        ],
        'gallery_images'  => [
            '/images/services/offshore/tanker-cruise-maintenance/gallery/gallery-1.jpg',
            '/images/services/offshore/tanker-cruise-maintenance/gallery/gallery-2.jpg',
            '/images/services/offshore/tanker-cruise-maintenance/hero-image.jpg',
        ],
        'stats'           => [
            ['value' => '24/7', 'label_key' => 'stat_operation'],
            ['value' => '100%', 'label_key' => 'stat_compliance'],
            ['value' => '15+',  'label_key' => 'stat_experience'],
        ],
        'show_features'   => true,
    ],
];
