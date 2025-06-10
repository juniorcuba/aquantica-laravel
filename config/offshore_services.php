<?php

return [
    [
        'title_key'       => 'service_rov',
        'description_key' => 'service_rov_desc',
        'featured'        => true,                     // ← only this item gets the big card
        'image'           => 'https://images.pexels.com/photos/4004374/pexels-photo-4004374.jpeg?auto=compress&cs=tinysrgb&w=1280',
        'features'        => [
            'High-definition video surveys',
            '3D modelling and mapping',
            'Structural integrity assessment',
            'Real-time monitoring',
            'Environmental compliance inspection',
            'Damage assessment',
        ],
        'gallery_images'  => [
            'https://images.pexels.com/photos/6934330/pexels-photo-6934330.jpeg?auto=compress&cs=tinysrgb&w=1280',
            'https://images.pexels.com/photos/7099710/pexels-photo-7099710.jpeg?auto=compress&cs=tinysrgb&w=1280',
        ],
        // little stats block for the featured card
        'stats'           => [
            ['value' => '4K',  'label_key' => 'stat_hd_video'],
            ['value' => '300m','label_key' => 'stat_depth_rating'],
            ['value' => '24/7','label_key' => 'stat_operation'],
        ],
    ],
    [
        'title_key'       => 'service_platform_maintenance',
        'description_key' => 'service_platform_maintenance_desc',
        'image'           => 'https://images.pexels.com/photos/2144326/pexels-photo-2144326.jpeg?auto=compress&cs=tinysrgb&w=1280',
        'features'        => [
            'Structural repairs',
            'Corrosion protection',
            'Equipment maintenance',
            'Safety system updates',
            'Integrity monitoring',
            'Emergency repairs',
        ],
        'gallery_images'  => [
            'https://images.pexels.com/photos/1254892/pexels-photo-1254892.jpeg?auto=compress&cs=tinysrgb&w=1280',
            'https://images.pexels.com/photos/2144326/pexels-photo-2144326.jpeg?auto=compress&cs=tinysrgb&w=1280',
            'https://images.pexels.com/photos/1008155/pexels-photo-1008155.jpeg?auto=compress&cs=tinysrgb&w=1280',
        ],
    ],
    [
        'title_key'       => 'service_subsea_installation',
        'description_key' => 'service_subsea_installation_desc',
        'image'           => 'https://images.pexels.com/photos/6934330/pexels-photo-6934330.jpeg?auto=compress&cs=tinysrgb&w=1280',
        'features'        => [
            'Pipeline installation',
            'Equipment deployment',
            'Anchor systems',
            'Cable laying',
            'Subsea connections',
            'Testing & commissioning',
        ],
        'gallery_images'  => [
            'https://images.pexels.com/photos/1254892/pexels-photo-1254892.jpeg?auto=compress&cs=tinysrgb&w=1280',
            'https://images.pexels.com/photos/2144326/pexels-photo-2144326.jpeg?auto=compress&cs=tinysrgb&w=1280',
            'https://images.pexels.com/photos/1008155/pexels-photo-1008155.jpeg?auto=compress&cs=tinysrgb&w=1280',
        ],
    ],
];
