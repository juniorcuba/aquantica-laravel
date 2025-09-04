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
        'image'           => '/images/services/offshore/platform-maintenance/gallery/gallery-1.jpg',
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
            '/images/services/offshore/platform-maintenance/main-service.jpg'
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
            '/images/services/offshore/sacrificial-anodes/gallery/gallery-2.jpg',
            '/images/services/offshore/sacrificial-anodes/gallery/gallery-3.jpg',
            '/images/services/offshore/sacrificial-anodes/main-service.jpg',
        ],
        'show_features'   => true,
    ],
];
