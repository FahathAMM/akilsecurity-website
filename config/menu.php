<?php

return [
    [
        'title' => 'Home',
        'route' => 'home',
    ],
    [
        'title' => 'About Us',
        'route' => 'about',
    ],
    [
        'title' => 'Services',
        'route' => 'services',
    ],
    [
        'title' => 'Blog',
        'route' => 'blog',
    ],
    [
        'title' => 'Pages',
        'children' => [
            ['title' => 'Service Details', 'route' => 'service.single'],
            ['title' => 'Blog Details', 'route' => 'blog.single'],
            ['title' => 'Projects', 'route' => 'projects'],
            ['title' => 'Project Details', 'route' => 'project.single'],
            ['title' => 'Our Team', 'route' => 'team'],
            ['title' => 'Pricing', 'route' => 'pricing'],
            ['title' => 'FAQs', 'route' => 'faqs'],
        ],
    ],
    [
        'title' => 'Contact Us',
        'route' => 'contact',
    ],
];
