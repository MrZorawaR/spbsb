<?php
$config = require_once __DIR__ . '/../app/config/site.php';

$title = "SPBSB Institute - Top PGDM Colleges in Panipat";
$description = "SPBSB Institute of Management offers AICTE approved PGDM programs with 24 LPA highest package, world-class faculty, and 95%+ placement rate. Apply now for 2026-28 batch.";
$canonical = "https://spbsb.in/";
$preload_hero = true;

require INCLUDES_PATH . '/header.php';
?>

<main>
    <!-- Hero Section with Carousel -->
    <section id="hero"
        class="relative h-[30vh] md:h-[75vh] lg:h-[85vh] overflow-hidden bg-black animate-fade motion-reduce:animate-none"
        aria-label="Featured highlights">
        <div id="hero-slides" class="relative h-full w-full">

            <?php foreach ($config['hero_slides'] as $index => $slide): ?>
                <article class="hero-slide absolute inset-0 transition-opacity duration-500 ease-in-out
        <?php echo $index === 0 ? 'opacity-100 z-10 is-active' : 'opacity-0 z-0'; ?>"
                    data-slide="<?php echo $index; ?>" aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>">

                    <img src="<?php echo htmlspecialchars($slide['image']); ?>"
                        alt="<?php echo htmlspecialchars($slide['image_alt']); ?>"
                        class="absolute inset-0 w-full h-full object-cover object-top"
                        loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>" />

                    <div class="absolute inset-0 bg-black/60 md:bg-black/40"></div>

                    <!-- MOBILE CONTENT -->
                    <div class="relative z-20 h-full flex flex-col items-center justify-center px-6 text-center md:hidden">
                        <?php if (!empty($slide['logo'])): ?>
                            <img src="<?php echo htmlspecialchars($slide['logo']); ?>" alt="Organization Logo"
                                class="h-10 mb-4 object-contain" />
                        <?php endif; ?>

                        <p class="text-2xl font-bold text-white leading-snug mb-2">
                            <?php echo htmlspecialchars($slide['title']); ?>
                        </p>

                        <span class="text-lg font-semibold text-yellow-400 mb-5">
                            <?php echo htmlspecialchars($slide['category']); ?>
                        </span>
                        <?php if (!empty($slide['link'])): ?>
                            <a href="<?php echo htmlspecialchars($slide['link'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="inline-block px-7 py-3 bg-secondary-500 text-white text-sm font-medium tracking-wide"
                                aria-label="Read more about <?php echo htmlspecialchars($slide['title'], ENT_QUOTES, 'UTF-8'); ?>">
                                Read More
                            </a>
                        <?php endif; ?>

                    </div>

                    <!-- DESKTOP CONTENT -->
                    <div class="hidden md:flex absolute inset-y-0 left-0 w-[45%] px-12 lg:px-16 xl:px-24 items-center z-30">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/40 via-black/20 to-transparent"></div>

                        <div class="relative max-w-lg text-white">
                            <?php if (!empty($slide['logo'])): ?>
                                <img src="<?php echo htmlspecialchars($slide['logo']); ?>" alt="Organization Logo"
                                    class="h-16 mb-8 object-contain" />
                            <?php endif; ?>

                            <p class="text-4xl lg:text-5xl font-bold leading-tight mb-4">
                                <?php echo htmlspecialchars($slide['title']); ?>
                            </p>

                            <span class="text-2xl font-bold text-yellow-400 block mb-8">
                                <?php echo htmlspecialchars($slide['category']); ?>
                            </span>
                            <?php if (!empty($slide['link'])): ?>
                                <a href="<?php echo htmlspecialchars($slide['link']); ?>"
                                    class="inline-block px-8 py-3 bg-secondary-500 hover:bg-secondary-600 text-white text-sm font-medium">
                                    Read More
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- CONTROLS (MOBILE + DESKTOP RESPONSIVE) -->
                    <div
                        class="absolute z-40 inset-y-1/2 -translate-y-1/2 left-0 right-0 flex justify-between px-4 md:inset-auto md:translate-y-0 md:bottom-20 md:left-[6.5%] md:right-auto md:px-0 md:justify-start md:gap-4">
                        <button id="hero-prev" aria-label="Previous slide"
                            class=" w-10 h-10 flex items-center justify-center text-white transition md:rounded-full md:border md:border-white md:hover:bg-white md:hover:text-black">
                            ‹
                        </button>

                        <button id="hero-next" aria-label="Next slide"
                            class=" w-10 h-10 flex items-center justify-center text-white transition md:rounded-full md:border md:border-white md:hover:bg-white md:hover:text-black ">
                            ›
                        </button>
                    </div>

                </article>
            <?php endforeach; ?>

        </div>
    </section>

    <!-- Deans Message -->
    <section class="relative overflow-hidden pb-20 pt-10 bg-pattern">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">Dean's Message</h2>
        </div>
        <div
            class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-primary-50 rounded-full blur-3xl opacity-50">
        </div>
        <div
            class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/4 w-96 h-96 bg-yellow-50 rounded-full blur-3xl opacity-50">
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-16 items-center">

                <div class="md:col-span-3 relative group">
                    <div
                        class="absolute -inset-4 border-2 border-primary-700/10 rounded-[50px] rotate-3 transition-transform group-hover:rotate-0 duration-500">
                    </div>

                    <div class="relative h-[300px] z-10 overflow-hidden image-mask bg-white shadow-2xl">
                        <img src="https://geetauniversity.edu.in/uploads/all/1983/indira.webp" alt="Dr. Indira Bhardwaj"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-primary-950/90 via-primary-900/40 to-transparent">
                            <h3 class="text-white text-xl font-bold leading-tight">Dr. Indira Bhardwaj</h3>
                            <p class="text-primary-100/90 text-sm font-medium">Dean, SPBSB</p>
                        </div>
                    </div>

                    <div class="absolute -bottom-10 -right-6 hidden md:block">
                        <svg class="w-32 h-32 text-yellow-400 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21L14.017 18C14.017 16.8954 13.1216 16 12.017 16H9C9.01166 16 9.01166 15.9999 9.01166 15.9999C9.01166 13.9238 10.3242 12.1645 12.1648 11.4589C12.7239 11.2446 13.0121 10.6234 12.7978 10.0643C12.5835 9.50523 11.9623 9.217 11.4032 9.43134C8.61864 10.4988 6.64936 13.1492 6.61198 16.2736L6.6118 21C6.6118 22.1046 7.50723 23 8.6118 23H12.017C13.1216 23 14.017 22.1046 14.017 21Z">
                            </path>
                        </svg>
                    </div>
                </div>

                <div class="md:col-span-9 space-y-8">

                    <blockquote class="relative">
                        <p class="serif-quote text-xl md:text-2xl text-gray-600 italic leading-snug">
                            "I am pleased to welcome you to the School of Commerce & Business Management at Geeta
                            University."
                        </p>
                    </blockquote>

                    <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                        <p class="text-justify">
                            Our programs are designed to offer a strong academic foundation along with practical
                            exposure in key areas such as finance, marketing, entrepreneurship, and management, enabling
                            students to meet industry demands with confidence. With the guidance of experienced faculty,
                            strong industry collaborations, and dedicated placement support, we ensure holistic
                            development and career readiness. We look forward to being a part of your journey toward
                            professional excellence.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Virtual Campus Banner -->
    <?php require INCLUDES_PATH . '/virtualTour.php'; ?>


    <!-- Programs Section -->
    <?php require INCLUDES_PATH . '/programs.php'; ?>

    <!-- The Ranking Banner -->
    <?php require INCLUDES_PATH . '/the-ranking.php'; ?>

    <!-- LOP Section -->
    <?php require INCLUDES_PATH . '/lop-section.php'; ?>


    <!-- Legacy & Ecosystem section -->
    <?php require INCLUDES_PATH . '/legacy-eco.php'; ?>
</main>

<?php require INCLUDES_PATH . '/footer.php'; ?>