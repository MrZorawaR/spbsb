<?php

$title = "SPBSB Institute - Top PGDM Colleges in Greater Noida | B-School";
$description = "SPBSB Institute of Management offers AICTE approved PGDM programs with 24 LPA highest package, world-class faculty, and 95%+ placement rate. Apply now for 2026-28 batch.";
$canonical = "https://spbsb.in/";
$preload_hero = true;

include __DIR__ . '/../app/includes/header.php';
?>

<main>
    <!-- Hero Section with Carousel -->
    <section id="hero" class="relative h-[50vh] md:h-[75vh] lg:h-[85vh] overflow-hidden bg-black animate-fade motion-reduce:animate-none"
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
                    <div class="relative z-20 h-full flex flex-col items-center justify-center
                 px-6 text-center md:hidden">
                        <?php if (!empty($slide['logo'])): ?>
                            <img src="<?php echo htmlspecialchars($slide['logo']); ?>" alt="Organization Logo"
                                class="h-10 mb-4 object-contain" />
                        <?php endif; ?>

                        <h2 class="text-2xl font-light text-white leading-snug mb-2">
                            <?php echo htmlspecialchars($slide['title']); ?>
                        </h2>

                        <span class="text-lg font-semibold text-yellow-400 mb-5">
                            <?php echo htmlspecialchars($slide['category']); ?>
                        </span>

                        <a href="<?php echo htmlspecialchars($slide['link']); ?>" class="inline-block px-7 py-3 bg-[#EF5D28] text-white
                   text-sm font-medium tracking-wide"
                            aria-label="Read more about <?php echo htmlspecialchars($slide['title']); ?>">
                            Read More
                        </a>
                    </div>

                    <!-- DESKTOP CONTENT -->
                    <div class="hidden md:flex absolute inset-y-0 left-0
                 w-[45%] lg:w-[38%]
                 px-12 lg:px-16 xl:px-24
                 items-center z-30">
                        <div class="absolute inset-0
                   bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>

                        <div class="relative max-w-lg text-white">
                            <?php if (!empty($slide['logo'])): ?>
                                <img src="<?php echo htmlspecialchars($slide['logo']); ?>" alt="Organization Logo"
                                    class="h-16 mb-8 object-contain" />
                            <?php endif; ?>

                            <h2 class="text-4xl lg:text-5xl font-light leading-tight mb-4">
                                <?php echo htmlspecialchars($slide['title']); ?>
                            </h2>

                            <span class="text-2xl font-bold text-yellow-400 block mb-8">
                                <?php echo htmlspecialchars($slide['category']); ?>
                            </span>

                            <a href="<?php echo htmlspecialchars($slide['link']); ?>" class="inline-block px-8 py-3 bg-[#EF5D28]
                     hover:bg-[#d64d1c]
                     text-white text-sm font-medium">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- CONTROLS (MOBILE + DESKTOP RESPONSIVE) -->
                    <div class="
            absolute z-40
            inset-y-1/2 -translate-y-1/2
            left-0 right-0
            flex justify-between
            px-4

            md:inset-auto md:translate-y-0
            md:bottom-20 md:left-[6.5%] md:right-auto
            md:px-0 md:justify-start md:gap-4
          ">
                        <button id="hero-prev" aria-label="Previous slide" class="
              w-10 h-10
              flex items-center justify-center
              text-white
              transition

              md:rounded-full
              md:border md:border-white
              md:hover:bg-white md:hover:text-black
            ">
                            ‹
                        </button>

                        <button id="hero-next" aria-label="Next slide" class="
              w-10 h-10
              flex items-center justify-center
              text-white
              transition

              md:rounded-full
              md:border md:border-white
              md:hover:bg-white md:hover:text-black
            ">
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
    <section class="relative flex items-center justify-center text-center text-white
         h-[60vh] max-md:h-[38vh] overflow-hidden">

        <img src="https://geetauniversity.edu.in/themes/geetau/image/video.webp" alt="Virtual Campus Background"
            loading="lazy" class="absolute inset-0 w-full h-full object-cover" />

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10">
            <button id="open-video" class="mx-auto flex items-center justify-center
             w-20 h-20 max-md:w-16 max-md:h-16
             rounded-full bg-orange-500 hover:bg-orange-600
             text-3xl max-md:text-2xl
             shadow-lg transition-transform duration-300 hover:scale-105">
                ▶
            </button>

            <h2 class="mt-5 text-2xl max-md:text-xl font-semibold drop-shadow-md">
                Virtual Campus Tour
            </h2>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-10 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">Our Programs</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Choose from our range of AICTE approved PGDM programs
                    designed to shape tomorrow's business leaders.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <?php
                $programColors = [
                    'from-primary-600 to-primary-800',
                    'from-secondary-600 to-secondary-800',
                    'from-emerald-600 to-emerald-800',
                    'from-amber-600 to-amber-800',
                    'from-purple-600 to-purple-800',
                    'from-rose-600 to-rose-800',
                ];
                $config = require __DIR__ . '/../app/config/site.php';
                foreach ($config['programs'] as $index => $program):
                    $colorClass = $programColors[$index % count($programColors)];
                    ?>
                    <a href="<?php echo $program['link']; ?>"
                        class="group relative overflow-hidden rounded-2xl bg-gradient-to-br <?php echo $colorClass; ?> p-8 text-white transition-all hover:shadow-2xl hover:-translate-y-1">

                        <div class="absolute inset-0 opacity-10">
                            <div
                                class="absolute top-0 right-0 w-40 h-40 bg-white rounded-full -translate-y-1/2 translate-x-1/2">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 w-32 h-32 bg-white rounded-full translate-y-1/2 -translate-x-1/2">
                            </div>
                        </div>

                        <div class="relative">
                            <div class="text-sm font-medium text-white/70 mb-2"><?php echo $program['name']; ?></div>
                            <h3 class="text-xl font-bold mb-3"><?php echo $program['title']; ?></h3>
                            <p class="text-white/80 text-sm mb-6"><?php echo $program['desc']; ?></p>

                            <div class="flex items-center text-sm font-semibold group-hover:gap-3 gap-2 transition-all">
                                Learn More
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- The Ranking Banner -->
    <section class="w-full">
        <img src="https://geetauniversity.edu.in/uploads/all/1905/the.webp" alt="The Ranking"
            class="w-full h-auto block">
    </section>

    <!-- LOP Section -->
    <section class="py-10 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-gray-900">
                    Leadership Odyssey Program (LOP)
                </h2>
                <p class="mt-3 text-gray-600">
                    Individual Development Program (IDP) – Customized Career Plan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="group bg-white border rounded-lg p-6 flex gap-5 hover:shadow-lg transition">
                    <div class="flex flex-col items-center">
                        <span class="text-sm font-semibold text-orange-600">PHASE</span>
                        <span class="text-3xl font-bold text-orange-600">01</span>
                        <span class="w-1 h-full bg-orange-500 mt-3 rounded"></span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-orange-600 mb-2">
                            Profiling
                        </h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 text-sm">
                            <li>Aptitude and reasoning tests</li>
                            <li>Psychometrics & personality assessment</li>
                            <li>ATS-optimized resume audit</li>
                            <li>Interest mapping & SWOT analysis</li>
                        </ul>
                    </div>
                </div>

                <div class="group bg-white border rounded-lg p-6 flex gap-5 hover:shadow-lg transition">
                    <div class="flex flex-col items-center">
                        <span class="text-sm font-semibold text-blue-600">PHASE</span>
                        <span class="text-3xl font-bold text-blue-600">02</span>
                        <span class="w-1 h-full bg-blue-500 mt-3 rounded"></span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-blue-600 mb-2">
                            Skill Blueprints
                        </h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 text-sm">
                            <li>Customized skill modules</li>
                            <li>Industry certifications (AWS, Cisco, EC-Council)</li>
                            <li>Quarterly progress tracking</li>
                        </ul>
                    </div>
                </div>

                <div class="group bg-white border rounded-lg p-6 flex gap-5 hover:shadow-lg transition">
                    <div class="flex flex-col items-center">
                        <span class="text-sm font-semibold text-amber-600">PHASE</span>
                        <span class="text-3xl font-bold text-amber-600">03</span>
                        <span class="w-1 h-full bg-amber-500 mt-3 rounded"></span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-amber-600 mb-2">
                            SWOT Odyssey Framework (SOF)
                        </h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 text-sm">
                            <li>Strength alignment to roles</li>
                            <li>Skill-gap bootcamps</li>
                            <li>Market trend opportunity mapping</li>
                            <li>Threat mitigation strategies</li>
                        </ul>
                    </div>
                </div>

                <div class="group bg-white border rounded-lg p-6 flex gap-5 hover:shadow-lg transition">
                    <div class="flex flex-col items-center">
                        <span class="text-sm font-semibold text-teal-600">PHASE</span>
                        <span class="text-3xl font-bold text-teal-600">04</span>
                        <span class="w-1 h-full bg-teal-500 mt-3 rounded"></span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-teal-600 mb-2">
                            Career Acceleration (WTO)
                        </h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 text-sm">
                            <li>Workplace Thrive Quotient</li>
                            <li>Role-specific preparation</li>
                            <li>Company culture & performance analysis</li>
                            <li>Final placement readiness mapping</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Legacy & Ecosystem section -->
    <section class="max-w-7xl mx-auto py-10">
        <header class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
                Legacy & Ecosystem
            </h2>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-start">

            <div class="md:col-span-7">
                <p class="text-gray-700 text-lg leading-relaxed max-w-3xl mb-8">
                    Founded in 1985, the <span class="font-semibold">Geeta Group of Institutions</span> has emerged as a
                    major educational hub with institutions spanning school education to doctoral programs. SPBSB
                    benefits
                    from the integrated ecosystem of:
                </p>

                <div class="space-y-4">
                    <div class="flex items-stretch group">
                        <div
                            class="bg-[#E85C2D] text-white p-5 flex-grow rounded-sm shadow-sm transition-transform duration-200 group-hover:-translate-y-1">
                            <h3 class="text-xl font-bold mb-1">Geeta University</h3>
                            <p class="text-orange-50 font-medium">
                                AI-enabled multidisciplinary campus
                            </p>
                        </div>
                        <div class="w-2 bg-[#E85C2D] ml-2 rounded-sm opacity-80"></div>
                    </div>

                    <div class="flex items-stretch group">
                        <div
                            class="bg-[#4D94FF] text-white p-5 flex-grow rounded-sm shadow-sm transition-transform duration-200 group-hover:-translate-y-1">
                            <h3 class="text-xl font-bold mb-1">Geeta Finishing School (GFS)</h3>
                            <p class="text-blue-50 font-medium">
                                Communication & Corporate Readiness
                            </p>
                        </div>
                        <div class="w-2 bg-[#4D94FF] ml-2 rounded-sm opacity-80"></div>
                    </div>

                    <div class="flex items-stretch group">
                        <div
                            class="bg-[#4DB6AC] text-white p-5 flex-grow rounded-sm shadow-sm transition-transform duration-200 group-hover:-translate-y-1">
                            <h3 class="text-xl font-bold mb-1">Geeta Technical Hub (GTH)</h3>
                            <p class="text-teal-50 font-medium">
                                Advanced Technology, Certifications, and Industry Skills
                            </p>
                        </div>
                        <div class="w-2 bg-[#4DB6AC] ml-2 rounded-sm opacity-80"></div>
                    </div>
                </div>

                <div class="mt-8">
                    <p class="text-gray-500 text-lg font-medium leading-snug max-w-md">
                        Together, they form a holistic,<br>
                        future-ready talent development ecosystem.
                    </p>
                </div>
            </div>

            <div class="md:col-span-5 hidden md:block">
                <div class="relative rounded-lg overflow-hidden shadow-lg border border-gray-200">
                    <img src="https://images.unsplash.com/photo-1526779259212-939e64788e3c?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZnJlZSUyMGltYWdlc3xlbnwwfHwwfHx8MA%3D%3D"
                        alt="Geeta Group Ecosystem" class="w-full h-full object-cover aspect-[1/1]" loading="lazy" />
                </div>
            </div>

        </div>
    </section>
</main>

<?php include __DIR__ . '/../app/includes/footer.php'; ?>