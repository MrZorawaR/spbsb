<?php
$config = require_once __DIR__ . '/../../app/config/site.php';

$title = "About SPBSB - Top PGDM Colleges in Panipat";
$description = "SPBSB Institute of Management offers AICTE approved PGDM programs with 24 LPA highest package, world-class faculty, and 95%+ placement rate. Apply now for 2026-28 batch.";
$canonical = "https://spbsb.in/about/";
$preload_hero = true;

require INCLUDES_PATH . '/header.php';
?>

<style>
    .timeline-container::after {
        content: '';
        position: absolute;
        width: 4px;
        background: linear-gradient(to bottom, #88a6bb, #06355f);
        top: 10px;
        bottom: 10px;
        left: 50%;
        margin-left: -1.5px;
        border-radius: 3px;
        z-index: 1;
    }

    .timeline-item {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .timeline-item.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .timeline-item::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background-color: #06355f;
        top: 30px;
        border-radius: 50%;
        z-index: 3;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .left::after {
        right: -10px;
    }

    .right::after {
        left: -10px;
    }

    .content {
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        box-shadow: 0 4px 16px 0 rgba(10, 45, 75, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .timeline-item:hover .content {
        transform: translateY(-4px) scale(1.01);
        box-shadow: 0 8px 20px 0 rgba(10, 45, 75, 0.2);
    }

    .timeline-item:hover::after {
        transform: scale(1.1);
        box-shadow: 0 0 0 4px rgba(10, 45, 75, 0.99);
    }

    .year {
        background: -webkit-linear-gradient(#06355f, #88a6bb);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .events li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #06355f;
        font-weight: 700;
        font-size: 1.1em;
    }

    @media screen and (max-width: 768px) {
        .timeline-container::after {
            left: 20px;
        }

        .timeline-item {
            width: 100%;
            padding-left: 60px;
            padding-right: 15px;
        }

        .left,
        .right {
            left: 0;
            text-align: left;
            padding-left: 50px;
        }

        .timeline-item::after {
            left: 10px;
        }
    }

    .leader-card {
        position: relative;
        overflow: hidden;
        transition: transform .4s ease, box-shadow .4s ease;
    }

    .leader-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px -8px rgba(6, 53, 95, .25);
    }

    .leader-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .3), transparent);
        transform: translateX(-100%);
        transition: transform .5s ease;
        z-index: 1;
    }

    .leader-card:hover::before {
        transform: translateX(100%);
    }

    .leader-image-wrapper {
        position: relative;
        overflow: hidden;
    }

    .leader-card img {
        transition: transform .6s ease;
    }

    .leader-card:hover img {
        transform: scale(1.05);
    }

    .gradient-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                rgba(6, 53, 95, 0) 0%,
                rgba(6, 53, 95, 0) 60%,
                rgba(6, 53, 95, .6) 100%);
    }

    .leader-name {
        background: linear-gradient(90deg, #06355f, #88a6bb, #06355f);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: background-position .4s ease;
    }

    .leader-card:hover .leader-name {
        background-position: 100% center;
    }

    .details-toggle svg {
        transition: transform .4s ease;
    }

    .leader-card.active .details-toggle svg {
        transform: rotate(180deg);
    }

    .leader-details {
        max-height: 0;
        overflow: hidden;
        transition: max-height .6s ease;
        background: linear-gradient(to bottom, rgba(6, 53, 95, .03), transparent);
    }

    .read-progress {
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #06355f, #88a6bb);
        transition: width .4s ease;
    }

    .leader-card.active .read-progress {
        width: 100%;
    }

    .leader-quote {
        padding-left: 16px;
        border-left: 3px solid #06355f;
        background: rgba(6, 53, 95, .05);
    }
</style>

<main>
    <section class="relative w-full h-[25vh] md:h-[85vh] overflow-hidden">
        <img src="https://geetauniversity.edu.in/themes/geetau/image/video.webp" alt="SPBSB Campus"
            class="absolute inset-0 w-full h-full object-cover object-center" loading="eager" />

        <div class="absolute inset-0 bg-black/55"></div>

        <div class="relative z-10 flex items-center justify-center h-full px-6 text-center">
            <div class="max-w-3xl text-white">
                <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-2">
                    About Us
                </h1>
                <p class="text-base md:text-md text-white/90 leading-relaxed">
                    WHERE ETHICS MEETS EXCELLENCE
                </p>
            </div>
        </div>
    </section>

    <section id="recognitions" class="bg-primary-50 py-10">
        <div class="max-w-7xl mx-auto px-4">

            <!-- Section Header -->
            <div class="text-center max-w-5xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-700">
                    Recognitions & Approvals
                </h2>
                <p class="mt-3 text-slate-600">
                    SPBSB is recognised and approved by leading statutory
                    and professional bodies, ensuring academic credibility and excellence.
                </p>
            </div>

            <!-- Logo Grid -->
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 items-stretch" role="list">
                <!-- UGC -->
                <li class="bg-white rounded-2xl shadow-sm hover:shadow-md transition
                   flex flex-col items-center justify-center p-6 text-center">
                    <img src="https://geetauniversity.edu.in/uploads/all/1385/19.png"
                        alt="University Grants Commission UGC Approved" width="120" height="120" loading="lazy"
                        class="h-20 w-auto object-contain" />
                    <span class="mt-4 font-semibold text-primary-700">
                        UGC
                    </span>
                </li>

                <!-- BCI -->
                <li class="bg-white rounded-2xl shadow-sm hover:shadow-md transition
                   flex flex-col items-center justify-center p-6 text-center">
                    <img src="https://geetauniversity.edu.in/uploads/all/1382/4.png" alt="Bar Council of India Approved"
                        width="120" height="120" loading="lazy" class="h-20 w-auto object-contain" />
                    <span class="mt-4 font-semibold text-primary-700">
                        BCI
                    </span>
                </li>

                <!-- PCI -->
                <li class="bg-white rounded-2xl shadow-sm hover:shadow-md transition
                   flex flex-col items-center justify-center p-6 text-center">
                    <img src="https://geetauniversity.edu.in/uploads/all/1383/5.png"
                        alt="Pharmacy Council of India Approved" width="120" height="120" loading="lazy"
                        class="h-20 w-auto object-contain" />
                    <span class="mt-4 font-semibold text-primary-700">
                        PCI
                    </span>
                </li>

                <!-- MCI -->
                <li class="bg-white rounded-2xl shadow-sm hover:shadow-md transition
                   flex flex-col items-center justify-center p-6 text-center">
                    <img src="https://geetauniversity.edu.in/uploads/all/1384/6.png"
                        alt="Medical Council of India Approved" width="120" height="120" loading="lazy"
                        class="h-20 w-auto object-contain" />
                    <span class="mt-4 font-semibold text-primary-700">
                        MCI
                    </span>
                </li>
            </ul>

        </div>
    </section>

    <img src="https://geetauniversity.edu.in/uploads/all/1968/8.webp" alt="Hero Img"
        class="h-full w-full object-cover object-center" loading="lazy" />

    <section class="bg-[#f6fcfb] py-10 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Vision Card -->
                <div class="bg-white rounded-2xl p-8 md:p-10
                       border-l-4 border-[#b91c1c]
                       shadow-sm hover:shadow-md
                       transition-shadow duration-300">

                    <div class="flex items-center gap-4 mb-6">
                        <!-- Vision SVG -->
                        <div class="w-10 h-10 flex items-center justify-center
                               rounded-full bg-[#b91c1c]/10 text-[#b91c1c]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5">
                                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>

                        <h3 class="text-2xl font-semibold text-gray-800">
                            Our Vision
                        </h3>
                    </div>

                    <p class="text-gray-700 leading-relaxed text-base text-justify">
                        “To be a premier, industry-anchored business school that empowers management professionals with
                        technological fluency, conceptual rigour, and strong ethical foundations to drive sustainable
                        business growth.”
                    </p>
                </div>

                <!-- Mission Card -->
                <div class="bg-white rounded-2xl p-8 md:p-10
                       border-l-4 border-[#0f766e]
                       shadow-sm hover:shadow-md
                       transition-shadow duration-300">

                    <div class="flex items-center gap-4 mb-6">
                        <!-- Mission SVG -->
                        <div class="w-10 h-10 flex items-center justify-center
                               rounded-full bg-[#0f766e]/10 text-[#0f766e]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <circle cx="12" cy="12" r="2" />
                            </svg>
                        </div>

                        <h3 class="text-2xl font-semibold text-gray-800">
                            Our Mission
                        </h3>
                    </div>

                    <ul class="space-y-4 text-gray-700 text-base leading-relaxed list-disc pl-5 text-justify">
                        <li>
                            Design and deliver industry-focused management education blending business fundamentals with
                            digital, analytical, and AI-enabled tools.
                        </li>
                        <li>
                            Nurture ethical leaders with professional integrity, social responsibility, and
                            sustainability-driven strategic thinking.
                        </li>
                        <li>
                            Leverage human intelligence blended with artificial intelligence for agile problem-solving
                            and strategic planning.
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-[#f8f6f0]">
        <div class="max-w-7xl mx-auto px-8 py-10">
            <!-- Header -->

            <div class="text-center max-w-5xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-700">
                    OUR IDENTITY: ROOTED IN LEGACY, SHAPING THE FUTURE
                </h2>
                <p class="mt-3 text-slate-600">
                    At SPBSB, we offer a combination of a bold futuristic vision and the wisdom of the past. Our
                    integration of innovation, technology, and global academic standards helps carry forward the legacy
                    of India’s rich educational heritage.
                </p>
            </div>

            <div class="relative mb-10">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 rounded-2xl overflow-visible md:overflow-hidden shadow-2xl relative z-0">
                    <div
                        class="bg-secondary-500 text-white p-6 pb-16 md:pb-8 md:pr-20 flex items-center justify-center md:justify-start relative min-h-[200px] rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none">
                        <div class="max-w-md relative z-10">
                            <p class="text-md leading-relaxed">
                                <span class="font-bold font-serif text-lg">Saffron</span> symbolizes the timeless
                                knowledge
                                of Indian saints — a nod to our deep-rooted cultural legacy.
                            </p>
                        </div>
                    </div>

                    <div
                        class="bg-primary-500 text-white p-6 pt-16 md:pt-8 md:pl-20 flex items-center justify-center md:justify-end relative min-h-[220px] rounded-b-2xl md:rounded-r-2xl md:rounded-bl-none">
                        <div class="max-w-md relative z-10">
                            <p class="text-md leading-relaxed">
                                <span class="font-bold font-serif text-lg">Blue</span> represents the future — driven
                                by
                                technology, openness, and the pursuit of academic excellence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20">
                    <div
                        class="bg-white rounded-full w-40 h-40 md:w-56 md:h-56 flex items-center justify-center shadow-2xl border-8 border-[#f8f6f0]">
                        <div class="text-center px-8 md:px-10">
                            <p class="text-gray-800 font-semibold text-md md:text-lg leading-tight">
                                Our theme colours reflect this philosophy
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mx-auto bg-white/50 backdrop-blur-sm p-12 rounded-2xl shadow-lg">
                <p class="text-md text-gray-700 leading-relaxed font-light text-justify">
                    Our crest stands for courage, ambition, and transformation. It reflects Geeta University's
                    commitment to being more than an institution. It presents Geeta University as a hub of knowledge
                    where the future is imagined, nurtured, and realised. Here, students are not just prepared for the
                    future — they learn to shape it.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F9EBDB] p-0">
        <div class="max-w-7xl mx-auto">

            <img src="https://geetauniversity.edu.in/uploads/all/1905/the.webp"
                alt="Times Higher Education World University Rankings" width="1920" height="420" loading="lazy"
                class="hidden md:block w-full h-auto rounded-lg" />

            <img src="https://geetauniversity.edu.in/uploads/all/1890/THE-Ranking.jpg"
                alt="Times Higher Education World University Rankings" width="768" height="480" loading="lazy"
                class="block md:hidden w-full h-auto rounded-lg" />

        </div>
    </section>

    <section class="bg-white py-10 px-4 text-gray-800" id="legacy">
        <div class="container max-w-6xl mx-auto">
            <header class="text-center max-w-5xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-700">
                    Our Legacy
                </h2>
                <p class="mt-3 text-slate-600">
                    Geeta Group of Institutions, which provides quality education across diverse levels and fields,
                    initiated it's journey in 1985. Today, it has become an educational hub operating many schools,
                    colleges and even an esteemed University under its aegis. The group is committed to shaping
                    countless futures, ensuring holistic student development for the past four decades.
                </p>
            </header>

            <div class="timeline-container relative max-w-[1000px] mx-auto">
                <div
                    class="timeline-item right p-[3px_8px] relative w-1/2 left-1/2 pl-20 pr-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">1998</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Geeta Vidya Mandir, NHBC, Panipat</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item left p-[3px_8px] relative w-1/2 left-0 pr-20 pl-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2001</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Geeta Vidya Mandir Public School, Sanoli Road, Panipat
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item right p-[3px_8px] relative w-1/2 left-1/2 pl-20 pr-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2006</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Geeta College of Education, Sanoli Road, Panipat</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item left p-[3px_8px] relative w-1/2 left-0 pr-20 pl-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2007</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Geeta Institute of Law, GT Road, Panipat</li>
                            <li class="relative pl-[22px] mb-1">Lakshay College of Education, Naultha, Panipat</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item right p-[3px_8px] relative w-1/2 left-1/2 pl-20 pr-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2008</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Geeta Engineering College, Panipat (Converted to Geeta
                                University later on)</li>
                            <li class="relative pl-[22px] mb-1">Geeta Institute of Education, GT Road, Panipat</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item left p-[3px_8px] relative w-1/2 left-0 pr-20 pl-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2012</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Delhi Public School, Jind</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item right p-[3px_8px] relative w-1/2 left-1/2 pl-20 pr-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2016</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Lakshay International School, Naultha, Panipat</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item left p-[3px_8px] relative w-1/2 left-0 pr-20 pl-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2019</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Geeta Institute of Pharmacy, Panipat</li>
                            <li class="relative pl-[22px] mb-1">Kualakubs (A Pre-School Chain in Panipat, Jind, Gurugram
                                & more)</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item right p-[3px_8px] relative w-1/2 left-1/2 pl-20 pr-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2022</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Geeta University, Panipat</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="timeline-item left p-[3px_8px] relative w-1/2 left-0 pr-20 pl-[8px] text-left z-[2] is-visible">
                    <div class="content p-[18px_25px] rounded-xl relative">
                        <div class="year text-[2rem] font-bold mb-[8px]">2026</div>
                        <ul class="events text-[0.9rem] text-[#3b4256] leading-[1.6] list-none p-0 m-0">
                            <li class="relative pl-[22px] mb-1">Kualakubs World School, Gurugram(Upcoming)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-10 px-4 relative overflow-hidden bg-[#F6FCFB]" id="leadership">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center max-w-5xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-700">
                    Leadership
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 items-start">
                <div
                    class="leader-card card-appear bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl border border-white/20">
                    <div class="leader-image-wrapper relative h-80">
                        <img src="https://geetauniversity.edu.in/uploads/all/1969/13.webp" alt="S.P. Bansal"
                            class="w-full h-full object-cover object-top">
                        <div class="gradient-overlay absolute inset-0"></div>
                    </div>
                    <div class="p-6 md:p-7">
                        <div class="read-progress mb-4"></div>
                        <h3 class="leader-name text-2xl font-bold mb-2 block">S.P. Bansal</h3>
                        <p class="text-sm text-gray-500 mb-5 flex items-center gap-2">

                            Chancellor, Geeta University
                        </p>
                        <div class="details-toggle cursor-pointer flex justify-between items-center group">
                            <span
                                class="text-sm font-semibold text-[#06355f] group-hover:text-[#88a6bb] transition-colors">Read
                                Message</span>
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-[#06355f] to-[#88a6bb] flex items-center justify-center text-white relative">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="leader-details px-6 md:px-7 pb-0">
                        <div class="pt-5 pb-6 border-t border-gray-100">
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                I welcome you all to Geeta University, where academic learning is just one aspect of
                                your all-around development. The University focuses on providing value-added education
                                in diverse fields to turn you into job givers rather than job seekers. Our priority is
                                to turn your dreams into reality and help you evolve into responsible citizens who make
                                the world better.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-5">
                                A bustling campus life, support of our distinguished teachers, and a welcoming
                                environment all inspire you to learn, explore, and reach your true potential. With us,
                                you evolve into futuristic entrepreneurs, leaders, and positive social contributors.
                            </p>
                            <div class="leader-quote p-4 rounded-lg mb-6">
                                <p class="text-sm font-semibold italic text-[#06355f]">
                                    So, join us to learn to think big, act with wisdom, and inspire others through your
                                    actions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="leader-card card-appear bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl border border-white/20">
                    <div class="leader-image-wrapper relative h-80">
                        <img src="https://geetauniversity.edu.in/uploads/all/1970/14.webp" alt="Nishant Bansal"
                            class="w-full h-full object-cover object-top">
                        <div class="gradient-overlay absolute inset-0"></div>
                    </div>
                    <div class="p-6 md:p-7">
                        <div class="read-progress mb-4"></div>
                        <h3 class="leader-name text-2xl font-bold mb-2 block">Nishant Bansal</h3>
                        <p class="text-sm text-gray-500 mb-5 flex items-center gap-2">

                            Pro-Chancellor, Geeta University
                        </p>
                        <div class="details-toggle cursor-pointer flex justify-between items-center group">
                            <span
                                class="text-sm font-semibold text-[#06355f] group-hover:text-[#88a6bb] transition-colors">Read
                                Message</span>
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-[#06355f] to-[#88a6bb] flex items-center justify-center text-white relative">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="leader-details px-6 md:px-7 pb-0">
                        <div class="pt-5 pb-6 border-t border-gray-100">
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                Founded on the principles of academic excellence, innovation, and strong values, Geeta
                                University is backed by years of legacy in educational excellence. Being the
                                Pro-Chancellor of the University, it is my duty and responsibility to carry this legacy
                                forward. I am also committed to ensuring the growth, quality, and inclusivity of all our
                                students.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-5">
                                At Geeta University, we provide the best environment and opportunities for you to learn
                                and explore. believe in making excellence an integral part of your life on campus. Our
                                modern classrooms, advanced labs, and strong industry ties. Students learn the
                                significance of teamwork and innovation at our research centres, turning ideas into
                                reality.
                            </p>
                            <div class="leader-quote p-4 rounded-lg mb-6">
                                <p class="text-sm font-semibold italic text-[#06355f]">
                                    At Geeta University, we are shaping not just skilled professionals but confident
                                    leaders — with knowledge, values, and the will to solve real problems in the world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="leader-card card-appear bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl border border-white/20">
                    <div class="leader-image-wrapper relative h-80">
                        <img src="https://geetauniversity.edu.in/uploads/all/1971/15.webp" alt="Ankush Bansal"
                            class="w-full h-full object-cover object-top">
                        <div class="gradient-overlay absolute inset-0"></div>
                    </div>
                    <div class="p-6 md:p-7">
                        <div class="read-progress mb-4"></div>
                        <h3 class="leader-name text-2xl font-bold mb-2 block">Ankush Bansal</h3>
                        <p class="text-sm text-gray-500 mb-5 flex items-center gap-2">

                            Pro-Chancellor, Geeta University
                        </p>
                        <div class="details-toggle cursor-pointer flex justify-between items-center group">
                            <span
                                class="text-sm font-semibold text-[#06355f] group-hover:text-[#88a6bb] transition-colors">Read
                                Message</span>
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-[#06355f] to-[#88a6bb] flex items-center justify-center text-white relative">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="leader-details px-6 md:px-7 pb-0">
                        <div class="pt-5 pb-6 border-t border-gray-100">
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                The digital era is evolving rapidly, creating an urgent need to prepare students for the
                                future. At Geeta University, we do so by equipping you with the required skills for
                                careers that are taking shape, apart from the ones that exist today. We offer a learning
                                environment where technology and innovation work seamlessly together.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                Our Courses are designed to include emerging domains like artificial intelligence,
                                blockchain, advanced analytics, and cybersecurity. You gain the skills and the
                                knowledge, most likely to be in demand in the future job market.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-5">
                                We go beyond conventional teaching to teaching to promote interdisciplinary learning,
                                entrepreneurial ideas, and build global connections to inspire curiosity and develop
                                futuristic solutions. Geeta University enhances your technical abilities, creative
                                thinking skills, and ability to envision your future clearly.
                            </p>
                            <div class="leader-quote p-4 rounded-lg mb-6">
                                <p class="text-sm font-semibold italic text-[#06355f]">
                                    We welcome dreamers, innovators, and lifelong learners to be a part of the journey
                                    driven by modern technologies and full of endless opportunities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="leader-card card-appear bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl border border-white/20">
                    <div class="leader-image-wrapper relative h-80">
                        <img src="https://geetauniversity.edu.in/uploads/all/1974/16.webp" alt="Dr. Manoj Manuja"
                            class="w-full h-full object-cover object-top">
                        <div class="gradient-overlay absolute inset-0"></div>
                    </div>
                    <div class="p-6 md:p-7">
                        <div class="read-progress mb-4"></div>
                        <h3 class="leader-name text-2xl font-bold mb-2 block">Dr. Manoj Manuja</h3>
                        <p class="text-sm text-gray-500 mb-5 flex items-center gap-2">

                            Vice Chancellor, Geeta University
                        </p>
                        <div class="details-toggle cursor-pointer flex justify-between items-center group">
                            <span
                                class="text-sm font-semibold text-[#06355f] group-hover:text-[#88a6bb] transition-colors">Read
                                Message</span>
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-[#06355f] to-[#88a6bb] flex items-center justify-center text-white relative">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="leader-details px-6 md:px-7 pb-0">
                        <div class="pt-5 pb-6 border-t border-gray-100">
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                The definition of education has changed over the past several decades. At Geeta
                                University, it is a tool to shape minds, build careers, and make a real difference in
                                the world. Geeta University holds a unique appeal for learners, researchers, and
                                employers passionate about growing, innovating, and feel inspired.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                Through our Four-Quadrant Mission—helping students get industry-ready, supporting
                                teachers to stay connected with real-world trends, driving meaningful research, and
                                earning recognition from the industry.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-5">
                                We create an environment where our graduates are prepared to lead with confidence. Here,
                                learning is about more than books. It's about thinking creatively, working together, and
                                turning ideas into action. It is the place where young minds develop into the leaders
                                and changemakers of tomorrow.
                            </p>
                            <div class="leader-quote p-4 rounded-lg mb-6">
                                <p class="text-sm font-semibold italic text-[#06355f]">
                                    So, let's shape the future together by learning, innovating, and growing every step
                                    of the way.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="leader-card card-appear bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl border border-white/20">
                    <div class="leader-image-wrapper relative h-80">
                        <img src="https://geetauniversity.edu.in/uploads/all/1973/17.webp"
                            alt="Prof. Dr. Gulshan Chauhan" class="w-full h-full object-cover object-top">
                        <div class="gradient-overlay absolute inset-0"></div>
                    </div>
                    <div class="p-6 md:p-7">
                        <div class="read-progress mb-4"></div>
                        <h3 class="leader-name text-2xl font-bold mb-2 block">Prof. Dr. Gulshan Chauhan</h3>
                        <p class="text-sm text-gray-500 mb-5 flex items-center gap-2">

                            Pro-Vice Chancellor, Geeta University
                        </p>
                        <div class="details-toggle cursor-pointer flex justify-between items-center group">
                            <span
                                class="text-sm font-semibold text-[#06355f] group-hover:text-[#88a6bb] transition-colors">Read
                                Message</span>
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-[#06355f] to-[#88a6bb] flex items-center justify-center text-white relative">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="leader-details px-6 md:px-7 pb-0">
                        <div class="pt-5 pb-6 border-t border-gray-100">
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                At Geeta University, learning is all about helping you reach your true potential and
                                grow as an individual. Our diverse program options make it possible for you to explore
                                new ideas, follow your passions, and succeed in your preferred industry.Our
                                distinguished teachers and capable mentors are ready to offer their constant support and
                                guidance, paving your way to success.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-5">
                                From world-class infrastructure to skill development and industry readiness, and even
                                global exposure opportunities, we help you gain the right knowledge and confidence to
                                thrive anywhere. Our partnerships and exchange programs also give you a global
                                perspective, so you're ready for a connected world.
                            </p>
                            <div class="leader-quote p-4 rounded-lg mb-6">
                                <p class="text-sm font-semibold italic text-[#06355f]">
                                    Nurturing curious minds and lifelong learners who are eager to make a positive
                                    difference in their communities and beyond is what motivates us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="leader-card card-appear bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl border border-white/20">
                    <div class="leader-image-wrapper relative h-80">
                        <img src="https://geetauniversity.edu.in/uploads/all/1909/dr-chander-prakash.jpeg"
                            alt="Prof. Dr. Chander Prakash" class="w-full h-full object-cover object-top">
                        <div class="gradient-overlay absolute inset-0"></div>
                    </div>
                    <div class="p-6 md:p-7">
                        <div class="read-progress mb-4"></div>
                        <h3 class="leader-name text-2xl font-bold mb-2 block">Prof. Dr. Chander Prakash</h3>
                        <p class="text-sm text-gray-500 mb-5 flex items-center gap-2">

                            Pro-Vice Chancellor - Research
                        </p>
                        <div class="details-toggle cursor-pointer flex justify-between items-center group">
                            <span
                                class="text-sm font-semibold text-[#06355f] group-hover:text-[#88a6bb] transition-colors">Read
                                Message</span>
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-[#06355f] to-[#88a6bb] flex items-center justify-center text-white relative">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="leader-details px-6 md:px-7 pb-0">
                        <div class="pt-5 pb-6 border-t border-gray-100">
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-4">
                                At Geeta University, we actively contribute to the knowledge economy by embedding
                                Research, Development, Innovation, Incubation, and Entrepreneurship as core of our
                                mission. We are systematically strengthening our research architecture through
                                interdisciplinary centres of excellence, high-impact publications, funded research
                                projects, advanced laboratories, and industry-embedded innovation programs. A strong
                                emphasis is placed on intellectual property creation, technology transfer, start-up
                                incubation, and deep-tech entrepreneurship, enabling our faculty and students to become
                                creators & innovators.
                            </p>
                            <p class="text-sm text-gray-700 leading-relaxed text-justify mb-5">
                                Every academic and research initiative strategically aligned with national and global
                                ranking and accreditation frameworks such as NIRF, QS, THE, and NAAC to ensure quality,
                                competitiveness, and global visibility. Geeta University is envisioned as a
                                research-intensive and innovation-led institution where discovery leads to development,
                                innovation drives impact, and ideas evolve into scalable start-ups and meaningful
                                societal solutions.
                            </p>
                            <div class="leader-quote p-4 rounded-lg mb-6">
                                <p class="text-sm font-semibold italic text-[#06355f]">
                                    Let's shape the future through research, innovation, and impact.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggles = document.querySelectorAll('.details-toggle');

        toggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const card = toggle.closest('.leader-card');
                const details = card.querySelector('.leader-details');
                const active = card.classList.contains('active');

                document.querySelectorAll('.leader-card.active').forEach(c => {
                    if (c !== card) {
                        c.classList.remove('active');
                        c.querySelector('.leader-details').style.maxHeight = null;
                    }
                });

                if (active) {
                    card.classList.remove('active');
                    details.style.maxHeight = null;
                } else {
                    card.classList.add('active');
                    details.style.maxHeight = details.scrollHeight + 'px';
                }
            });
        });
    });
</script>

<?php require INCLUDES_PATH . '/footer.php'; ?>