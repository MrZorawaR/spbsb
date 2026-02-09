<?php
$config = require_once __DIR__ . '/../../app/config/site.php';

$title = "About SPBSB - Top PGDM Colleges in Panipat";
$description = "SPBSB Institute of Management offers AICTE approved PGDM programs with 24 LPA highest package, world-class faculty, and 95%+ placement rate. Apply now for 2026-28 batch.";
$canonical = "https://spbsb.in/about/";
$preload_hero = true;

require INCLUDES_PATH . '/header.php';
?>

<main>
    <section class="relative w-full h-[25vh] md:h-[85vh] overflow-hidden">
        <img src="/assets/images/campus.webp" alt="SPBSB Campus"
            class="absolute inset-0 w-full h-full object-cover object-center" loading="eager" />

        <div class="absolute inset-0 bg-black/55"></div>

        <div class="relative z-10 flex items-center justify-center h-full px-6 text-center">
            <div class="max-w-3xl text-white">
                <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-2">
                    Academics
                </h1>
                <p class="text-base md:text-md text-white/90 leading-relaxed">
                    INSIGHT. ARTICULATE. INNOVATE.
                </p>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary-500 mt-3 mb-4">LEARNING PHILOSOPHY</h2>
                <p class="text-gray-600 max-w-5xl mx-auto">SPBSB follows a student-centric, experiential learning
                    philosophy where learning extends beyond textbooks and classrooms. Classrooms function as practice
                    labs supported by continuous feedback, reflection, and industry engagement.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mt-8">
                <div class="md:col-span-8">
                    <div class="grid md:grid-cols-2 gap-8">

                        <!-- Triple Thrust Strategy -->
                        <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-200">
                            <h3 class="text-lg font-bold tracking-wide text-primary-500 uppercase">
                                Triple Thrust Strategy
                            </h3>
                            <div class="h-[2px] w-40 bg-primary-300 mt-2 mb-4"></div>

                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    Industry Acumen
                                </li>

                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    Nuanced Articulation
                                </li>

                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    Digital Dexterity
                                </li>
                            </ul>
                        </div>

                        <!-- Learning Outcomes -->
                        <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-200">
                            <h3 class="text-lg font-bold tracking-wide text-primary-500 uppercase">
                                Learning Outcomes
                            </h3>
                            <div class="h-[2px] w-40 bg-primary-300 mt-2 mb-4"></div>

                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    Corporate Edge
                                </li>

                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    Thoughtful Expression
                                </li>

                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    Technological Mastery
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!-- Bottom Text -->
                    <p class="text-gray-700 mt-10 max-w-4xl mx-auto">
                        Global, regional, and local business exposure ensures students develop cross-cultural
                        sensitivity and sustainability-driven perspectives.
                    </p>
                </div>
                <div class="md:col-span-4">

                    <div class="relative h-full rounded-lg overflow-hidden shadow-lg border border-gray-200">
                        <img src="https://geetauniversity.edu.in/uploads/all/253/f-block-(1).webp"
                            alt="Geeta Group Ecosystem" class="w-full object-cover h-full" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require INCLUDES_PATH . '/programs.php'; ?>

    <section class="bg-gray-50 pb-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8">

                <!-- Industry Specialisations -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-primary-500 uppercase tracking-wide">
                            Industry-Aligned Specialisations
                        </h3>
                        <div class="h-[3px] w-20 bg-primary-300 mt-3 rounded"></div>
                    </div>

                    <ul class="grid sm:grid-cols-2 gap-y-3 gap-x-6 text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            AI for Business
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Business Analytics
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Digital Marketing
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            FinTech
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Applied Finance
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Supply Chain Management
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            International Business
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Marketing
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Finance
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Human Resource Management
                        </li>
                    </ul>
                </div>

                <!-- Workshops -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-8">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-primary-500 uppercase tracking-wide">
                            Value-Added Workshops & Exposure
                        </h3>
                        <div class="h-[3px] w-20 bg-primary-300 mt-3 rounded"></div>
                    </div>

                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Design Thinking
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Critical & Strategic Thinking
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Enterprise Risk Management
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Industry 4.0 & 5.0
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Geo-political Implications on Business
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Personal & Professional Resilience
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary-500 mt-3 mb-4">PROGRAM OBJECTIVES & OUTCOMES</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">

                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-primary-500 uppercase tracking-wide">
                            Program Objectives
                        </h3>
                        <div class="h-[3px] w-20 bg-primary-300 mt-3 rounded"></div>
                    </div>

                    <ul class="grid gap-y-3 gap-x-6 text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Develop competent, tech-enabled managers capable of data-drive decision-making.
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Create ethical leaders with integrity, resilience, and sustainability orientation.
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Build global business awareness and adaptability across cultures.
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Foster entrepreneurial and intrapreneurial capabilities.
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Encourage lifelong learning and continuous upskilling.
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-8">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-primary-500 uppercase tracking-wide">
                            Value-Added Workshops & Exposure
                        </h3>
                        <div class="h-[3px] w-20 bg-primary-300 mt-3 rounded"></div>
                    </div>
                    <p class="mb-4">Graduates of SPBSB demonstrate:</p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Strong knowledge of core management disciplines and analytical competence.
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Proficiency in advanced technology and AI-powered business tools.
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Enterprise Risk Management
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Industry 4.0 & 5.0
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Geo-political Implications on Business
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Personal & Professional Resilience
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

</main>

<?php require INCLUDES_PATH . '/footer.php'; ?>