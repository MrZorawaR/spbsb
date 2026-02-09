<?php
$config = require __DIR__ . '/../config/site.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/meta.php'; ?>
</head>

<body class="antialiased text-gray-900 bg-white">

    <!-- Top Bar -->
    <div class="bg-primary-600 text-white text-sm hidden lg:block">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-10">
                <div class="flex items-center gap-4">
                    <a href="#" class="flex items-center gap-2 hover:text-secondary-400 transition-colors">
                        ERP
                    </a>
                    <a href="#" class="flex items-center gap-2 hover:text-secondary-400 transition-colors">
                        Careers
                    </a>
                    <a href="#" class="flex items-center gap-2 hover:text-secondary-400 transition-colors">
                        Contact Us
                    </a>
                </div>
                <!-- Left: Contact Info -->
                <div class="flex items-center gap-4">
                    <a href="tel:<?php echo $config['contact']['phone']; ?>"
                        class="flex items-center gap-2 hover:text-secondary-400 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <?php echo $config['contact']['phone']; ?>
                    </a>
                    <a href="mailto:<?php echo $config['contact']['email']; ?>"
                        class="flex items-center gap-2 hover:text-secondary-400 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <?php echo $config['contact']['email']; ?>
                    </a>
                    <span class="text-white/60">|</span>
                    <a href="<?php echo $config['social']['facebook']; ?>" target="_blank" rel="noopener"
                        class="hover:text-secondary-400 transition-colors" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['twitter']; ?>" target="_blank" rel="noopener"
                        class="hover:text-secondary-400 transition-colors" aria-label="Twitter">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['linkedin']; ?>" target="_blank" rel="noopener"
                        class="hover:text-secondary-400 transition-colors" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['instagram']; ?>" target="_blank" rel="noopener"
                        class="hover:text-secondary-400 transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['youtube']; ?>" target="_blank" rel="noopener"
                        class="hover:text-secondary-400 transition-colors" aria-label="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header id="site-header" class="sticky top-0 z-50 bg-white border-b border-gray-200 transition-shadow duration-300">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 flex-shrink-0">
                    <img src="https://geetauniversity.edu.in/uploads/all/1984/SPBSB-Logo.webp"
                        alt="<?php echo $config['site_name']; ?> Logo" class="h-10 w-auto">
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-1 text-[15px] font-medium text-gray-700">

                    <a href="/about/" class="px-4 py-6 hover:text-primary-600 transition-colors">
                        About Us
                    </a>

                    <div class="relative group">
                        <button class="flex items-center gap-1 px-4 py-6 hover:text-primary-600 transition-colors">
                            Programs
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full pt-0 w-max opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 group-focus-within:opacity-100 group-focus-within:visible">
                            <div class="bg-white shadow-xl border border-gray-200 rounded-b-lg">
                                <div class="p-8">
                                    <p class="font-semibold text-primary-600 mb-6 text-sm uppercase tracking-wide">Find
                                        Your Program</p>
                                    <div class="grid gap-4">
                                        <?php foreach ($config['programs'] as $program): ?>
                                            <a href="<?php echo $program['link']; ?>"
                                                class="block p-4 rounded-lg bg-gray-50 hover:bg-primary-50 hover:border-primary-200 border border-transparent transition-all group/card">
                                                <div
                                                    class="font-semibold text-gray-900 group-hover/card:text-primary-600 transition-colors">
                                                    <?php echo $program['name']; ?>
                                                </div>
                                                <div class="text-sm text-gray-500 mt-1"><?php echo $program['title']; ?>
                                                </div>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="flex items-center gap-1 px-4 py-6 hover:text-primary-600 transition-colors">
                            SPBSB Edge
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div
                            class="absolute left-0 top-full pt-0 w-[300px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 group-focus-within:opacity-100 group-focus-within:visible">
                            <div class="bg-white shadow-xl border border-gray-200 rounded-b-lg p-6">
                                <ul class="space-y-3">
                                    <li><a href="#"
                                            class="text-gray-600 hover:text-primary-600 transition-colors">Overview</a>
                                    </li>
                                    <li><a href="#"
                                            class="text-gray-600 hover:text-primary-600 transition-colors">Internships</a>
                                    </li>
                                    <li><a href="#"
                                            class="text-gray-600 hover:text-primary-600 transition-colors">Placement
                                            Team</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Our
                                            Recruiters</a></li>
                                    <li><a href="#"
                                            class="text-gray-600 hover:text-primary-600 transition-colors">Placement
                                            Records</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="px-4 py-6 hover:text-primary-600 transition-colors">
                        Admissions
                    </a>
                    <a href="/campus-life/" class="px-4 py-6 hover:text-primary-600 transition-colors">
                        Campus Life
                    </a>
                    <a href="/academics/" class="px-4 py-6 hover:text-primary-600 transition-colors">
                        Academics
                    </a>
                </nav>

                <a href="https://admissions.geetauniversity.edu.in/" target="_blank"
                    class="hidden lg:inline-flex items-center px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-colors shadow-lg shadow-primary-600/25">
                    Apply Now
                </a>

                <!-- Mobile Menu Toggle -->
                <button id="menu-btn" class="lg:hidden p-2 text-gray-700 hover:text-primary-600 transition-colors"
                    aria-label="Open menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu"
        class="fixed inset-0 z-[60] bg-white transform translate-x-full transition-transform duration-300 ease-out lg:hidden overflow-y-auto">

        <!-- Mobile Header -->
        <div class="flex items-center justify-between h-20 px-6 border-b border-gray-200 sticky top-0 bg-white">
            <img src="https://geetauniversity.edu.in/uploads/all/1984/SPBSB-Logo.webp"
                alt="<?php echo $config['site_name']; ?> Logo" class="h-10 w-auto">
            <button id="menu-close" class="p-2 text-gray-700 hover:text-primary-600 transition-colors"
                aria-label="Close menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="px-6 py-6">
            <div class="space-y-2">

                <a href="/about/" class="block py-4 text-lg font-semibold text-gray-900 hover:text-primary-600">About
                    Us</a>


                <details class="group">
                    <summary
                        class="flex items-center justify-between py-4 text-lg font-semibold text-gray-900 cursor-pointer list-none">
                        Programs
                        <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </summary>
                    <div class="pb-4 pl-4 space-y-3">
                        <?php foreach ($config['programs'] as $program): ?>
                            <a href="<?php echo $program['link']; ?>"
                                class="block text-gray-600 hover:text-primary-600"><?php echo $program['name']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </details>

                <details class="group">
                    <summary
                        class="flex items-center justify-between py-4 text-lg font-semibold text-gray-900 cursor-pointer list-none">
                        SPBSB Edge
                        <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </summary>
                    <div class="pb-4 pl-4 space-y-3">
                        <a href="#" class="block text-gray-600 hover:text-primary-600">Faculty</a>
                        <a href="#" class="block text-gray-600 hover:text-primary-600">Research</a>
                        <a href="#" class="block text-gray-600 hover:text-primary-600">Library</a>
                    </div>
                </details>

                <a href="/academics/"
                    class="block py-4 text-lg font-semibold text-gray-900 hover:text-primary-600">Academics</a>
                <a href="#" class="block py-4 text-lg font-semibold text-gray-900 hover:text-primary-600">Campus
                    Life</a>
                <a href="#" class="block py-4 text-lg font-semibold text-gray-900 hover:text-primary-600">Admissions</a>
                <a href="#" class="block py-4 text-lg font-semibold text-gray-900 hover:text-primary-600">Contact Us</a>
                <a href="#" class="block py-4 text-lg font-semibold text-gray-900 hover:text-primary-600">Careers</a>
                <a href="#" class="block py-4 text-lg font-semibold text-gray-900 hover:text-primary-600">ERP</a>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="https://admissions.geetauniversity.edu.in/" target="_blank"
                    class="block w-full py-4 bg-primary-600 hover:bg-primary-700 text-white text-center font-semibold rounded-lg transition-colors">
                    Apply Now
                </a>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200 text-sm text-gray-600">
                <p class="mb-2">
                    <strong>Call:</strong>
                    <a href="tel:<?php echo $config['contact']['phone']; ?>"
                        class="text-primary-600"><?php echo $config['contact']['phone']; ?></a>
                </p>
                <p>
                    <strong>Email:</strong>
                    <a href="mailto:<?php echo $config['contact']['email']; ?>"
                        class="text-primary-600"><?php echo $config['contact']['email']; ?></a>
                </p>
            </div>
        </nav>
    </div>

    <div id="menu-backdrop"
        class="fixed inset-0 z-[55] bg-black/50 opacity-0 invisible transition-opacity duration-300 lg:hidden"></div>