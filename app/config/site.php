<?php
/**
 * Site Configuration - SPBSB Institute
 * All site-wide settings and constants
 */
defined('BASE_PATH') || define('BASE_PATH', dirname(__DIR__, 2));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');
defined('INCLUDES_PATH') || define('INCLUDES_PATH', APP_PATH . '/includes');
defined('PUBLIC_PATH') || define('PUBLIC_PATH', BASE_PATH . '/public');

return [
    // Site Identity
    'site_name' => 'SPBSB Institute of Management',
    'site_tagline' => 'Excellence in Management Education',
    'site_short' => 'SPBSB',

    // Environment
    'base_url' => '', // Empty for relative paths
    'env' => 'local', // local | production

    // Contact Information
    'contact' => [
        'phone' => '092787 68000',
        'toll_free' => '1800 ** ** ****',
        'email' => 'admissions@spbsb.in',
        'address' => 'NH-71, Naultha, Panipat, Haryana 132145',
    ],

    // Social Media Links
    'social' => [
        'facebook' => 'https://facebook.com/spbsb',
        'twitter' => 'https://twitter.com/spbsb',
        'linkedin' => 'https://linkedin.com/school/spbsb',
        'instagram' => 'https://instagram.com/spbsb',
        'youtube' => 'https://youtube.com/spbsb',
    ],

    // SEO Defaults
    'seo' => [
        'default_title' => 'SP Bansal School of Business',
        'default_description' => 'SP Bansal School of Business offers programs with excellent placements, world-class faculty, and state-of-the-art infrastructure.',
        'og_image' => '/assets/images/og-default.webp',
    ],

    // Asset versioning for cache busting
    'asset_version' => '1.0.0',

    // Hero Slides
    'hero_slides' => [
        [
            'category' => '',
            'title' => '',
            'description' => 'Director at Kalp Foundation and Founder of MAI Labs',
            'link' => null,
            'image' => 'https://geetauniversity.edu.in/uploads/all/1913/spb.jpg',
            'image_alt' => 'Mr. Tapan Sangal speaking at CXO Talk',
        ],
        [
            'category' => 'Admissions 2026',
            'title' => 'Shape Your Future',
            'description' => 'Applications now open for PGDM 2026-28 batch. Join one of India\'s premier B-Schools.',
            'link' => '/',
            'image' => 'https://geetauniversity.edu.in/themes/geetau/image/video.webp',
            'image_alt' => 'SPBSB campus aerial view',
        ],
    ],

    // Programs
    'programs' => [
        [
            'name' => 'MBA',
            'title' => 'MBA Core & Specializations',
            'desc' => 'Two-year full-time Master of Business Administration',
            'link' => '#',
        ],
        [
            'name' => 'Ph.D.',
            'title' => 'Ph.D. in Management',
            'desc' => 'Doctoral level program equivalent to Ph.D.',
            'link' => '#',
        ],
        
    ],

    // Statistics
    'stats' => [
        ['value' => '35+', 'label' => 'Years of Excellence'],
        ['value' => '500+', 'label' => 'Recruiting Companies'],
        ['value' => '24.43', 'label' => 'LPA Highest Package'],
        ['value' => '95%', 'label' => 'Placement Rate'],
    ],
];
