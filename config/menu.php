<?php

return [
    [
        'title' => 'Home',
        'route' => 'home',
    ],
    [
        'title' => 'Services',
        'route' => 'services.index',
    ],
    [
        'title' => 'About Us',
        'route' => 'abouts.index',
    ],
    // [
    //     'title' => 'Blog',
    //     'route' => '',
    // ],
    [
        'title' => 'Pages',
        'children' => [
            ['title' => 'Service Details', 'route' => ''],
            ['title' => 'Blog Details', 'route' => ''],
            ['title' => 'Projects', 'route' => ''],
            ['title' => 'Project Details', 'route' => ''],
            ['title' => 'Our Team', 'route' => ''],
            ['title' => 'Pricing', 'route' => ''],
            ['title' => 'FAQs', 'route' => ''],
        ],
    ],
    [
        'title' => 'Contact Us',
        'route' => 'contact.index',
    ],
];
