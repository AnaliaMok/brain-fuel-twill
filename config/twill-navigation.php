<?php

return [
    'insights' => [
        'title' => 'Insights',
        'route' => 'admin.insights.blogPosts.index',
        'primary_navigation' => [
            'blogPosts' => [
                'title' => 'BlogPosts',
                'module' => true
            ],
        ],
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'seo'],
        'primary_navigation' => [
            'seo' => [
                'title' => 'SEO',
                'route' => 'admin.settings',
                'params' => ['section' => 'seo'],
            ]
        ]
    ]
];
