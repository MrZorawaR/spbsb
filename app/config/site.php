<?php
/**
 * Site Configuration - SPBSB Institute
 * All site-wide settings and constants
 */

return [
    // Site Identity
    'site_name'     => 'SPBSB Institute of Management',
    'site_tagline'  => 'Excellence in Management Education',
    'site_short'    => 'SPBSB',
    
    // Environment
    'base_url'      => '', // Empty for relative paths
    'env'           => 'local', // local | production
    
    // Contact Information
    'contact' => [
        'phone'     => '+91-120-6843000',
        'toll_free' => '1800 5723 999',
        'email'     => 'admissions@spbsb.in',
        'address'   => 'Plot No. 5, Knowledge Park II, Greater Noida, UP 201306',
    ],
    
    // Social Media Links
    'social' => [
        'facebook'  => 'https://facebook.com/spbsb',
        'twitter'   => 'https://twitter.com/spbsb',
        'linkedin'  => 'https://linkedin.com/school/spbsb',
        'instagram' => 'https://instagram.com/spbsb',
        'youtube'   => 'https://youtube.com/spbsb',
    ],
    
    // SEO Defaults
    'seo' => [
        'default_title'       => 'SP Bansal School of Business',
        'default_description' => 'SP Bansal School of Business offers programs with excellent placements, world-class faculty, and state-of-the-art infrastructure.',
        'og_image'            => '/assets/images/og-default.webp',
    ],
    
    // Asset versioning for cache busting
    'asset_version' => '1.0.0',
    
    // Hero Slides
    'hero_slides' => [
        [
            'category'    => 'CXO Talk',
            'title'       => 'Mr. Tapan Sangal',
            'description' => 'Director at Kalp Foundation and Founder of MAI Labs',
            'link'        => '/events/cxo-talk-tapan-sangal/',
            'image'       => 'https://wallpapercave.com/wp/wp3990035.jpg',
            'image_alt'   => 'Mr. Tapan Sangal speaking at CXO Talk',
        ],
        [
            'category'    => 'Guest Lecture',
            'title'       => 'Industry Connect Series',
            'description' => 'Learn from top industry leaders and gain real-world insights',
            'link'        => '/events/industry-connect/',
            'image'       => 'https://media.gettyimages.com/id/1739254128/photo/ahmedabad-india-sachin-tendulkar-poses-infront-of-the-dp-world-lorry-during-the-icc-mens.jpg?s=612x612&w=0&k=20&c=WP4nc-t1ftNYEgbHOM_QLOj1xK3S_w95WLOZlvYhwVs=',
            'image_alt'   => 'Guest lecture session at SPBSB',
        ],
        [
            'category'    => 'Admissions 2026',
            'title'       => 'Shape Your Future',
            'description' => 'Applications now open for PGDM 2026-28 batch. Join one of India\'s premier B-Schools.',
            'link'        => '/admissions/apply/',
            'image'       => 'https://geetauniversity.edu.in/themes/geetau/image/video.webp',
            'image_alt'   => 'SPBSB campus aerial view',
        ],
    ],
    
    // Programs
    'programs' => [
        [
            'name'  => 'PGDM',
            'title' => 'PGDM Core',
            'desc'  => 'Two-year full-time Post Graduate Diploma in Management',
            'link'  => '/programs/pgdm/',
        ],
        [
            'name'  => 'PGDM-IBM',
            'title' => 'PGDM Insurance Business Management',
            'desc'  => 'Specialized program for the insurance sector',
            'link'  => '/programs/pgdm-ibm/',
        ],
        [
            'name'  => 'PGDM-IB',
            'title' => 'PGDM International Business',
            'desc'  => 'Global business perspective with international exposure',
            'link'  => '/programs/pgdm-ib/',
        ],
        [
            'name'  => 'PGDM-RM',
            'title' => 'PGDM Retail Management',
            'desc'  => 'Comprehensive retail industry focused program',
            'link'  => '/programs/pgdm-rm/',
        ],
        [
            'name'  => 'FPM',
            'title' => 'Fellow Program in Management',
            'desc'  => 'Doctoral level program equivalent to Ph.D.',
            'link'  => '/programs/fpm/',
        ],
        [
            'name'  => 'PGDM-Online',
            'title' => 'PGDM Online',
            'desc'  => 'Flexible online learning equivalent to MBA',
            'link'  => '/programs/pgdm-online/',
        ],
    ],
    
    // Statistics
    'stats' => [
        ['value' => '35+',   'label' => 'Years of Excellence'],
        ['value' => '500+',  'label' => 'Recruiting Companies'],
        ['value' => '24.43', 'label' => 'LPA Highest Package'],
        ['value' => '95%',   'label' => 'Placement Rate'],
    ],
];
