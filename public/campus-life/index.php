<?php
$config = require_once __DIR__ . '/../../app/config/site.php';

$title = "About SPBSB - Top PGDM Colleges in Panipat";
$description = "SPBSB Institute of Management offers AICTE approved PGDM programs with 24 LPA highest package, world-class faculty, and 95%+ placement rate. Apply now for 2026-28 batch.";
$canonical = "https://spbsb.in/campus-life/";
$preload_hero = true;
$useSwiper = true;

require INCLUDES_PATH . '/header.php';
?>

<style>
    .play-button::after {
        content: '';
        width: 0;
        height: 0;
        border-left: 24px solid #06355F;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        margin-left: 6px;
        position: relative;
        z-index: 1;
    }

    /* Pulse Ring Animation (can't be done with Tailwind) */
    .play-button::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: white;
        animation: pulse-ring 2s infinite;
        opacity: 0.6;
    }

    @keyframes pulse-ring {
        0% {
            transform: scale(1);
            opacity: 0.6;
        }

        50% {
            transform: scale(1.2);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 0;
        }
    }

    /* Mobile Play Button Size */
    @media (max-width: 768px) {
        .play-button::after {
            border-left: 18px solid #06355F;
            border-top: 12px solid transparent;
            border-bottom: 12px solid transparent;
        }
    }
</style>

<section class="relative w-full h-[25vh] md:h-[85vh] overflow-hidden">
    <img src="https://geetauniversity.edu.in/uploads/all/1800/1.jpg" alt="SPBSB Campus"
        class="absolute inset-0 w-full h-full object-cover object-center" loading="eager" />
</section>

<section class="py-10">
    <div class="text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">World Class Infrastructure</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Discover our modern facilities designed to foster innovation,
            collaboration, and academic excellence.</p>
    </div>
</section>


<?php require INCLUDES_PATH . '/virtualTour.php'; ?>

<section class="py-10">
    <div class="container mx-auto px-4">
        <div class="swiper facilitiesSwiper">
            <div class="swiper-wrapper">
                <!-- Classrooms Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1809/2.jpg"
                                alt="Spacious air-conditioned classroom with modern technology"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out group-hover:scale-110"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Classrooms</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Spacious and air-conditioned, our classrooms boost the intellectual growth of
                                students with the help of modern tools & technology.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- Conference Rooms Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1814/3.jpg"
                                alt="Modern conference room for group discussions"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Conference Rooms</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Eloquent design provides perfect spaces for group discussions, innovative ideas, and
                                brainstorming new concepts.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- Library Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1821/4.jpg"
                                alt="University library with extensive collection"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Library</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                An integrated knowledge and resource centre for enhancing student learning and
                                inspiring creative thinking.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- Laboratories Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1801/5.jpg"
                                alt="Well-equipped science laboratory"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Laboratories</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Well-equipped modern labs help students put classroom learning into practice through
                                hands-on experience.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- Auditorium Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1826/6.jpg"
                                alt="Grand auditorium for events"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Auditorium</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Our grand venue for celebrating university spirit through interactive sessions,
                                cultural activities, and conferences.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- Cafeteria Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1822/8.jpg"
                                alt="Student cafeteria with dining space"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Cafeteria</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Where friendships blossom and lifelong bonds are formed over shared treats and
                                delicious food.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- Hostels Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1813/7.jpg"
                                alt="Comfortable hostel accommodation"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Hostels</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                A cozy and comfortable home away from home where students create beautiful memories
                                for life.
                            </p>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Sports Facilities Section -->
<section class="" id="sports">
    <div class="container mx-auto px-4">

        <div class="text-center mb-5">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">Sports Facilities</h2>
            <p class="text-gray-600 max-w-5xl mx-auto">At Geeta University, we encourage students to take part in
                various sports activities to stay active and fit. Our outdoor sports facilities span over 10+ acres,
                complemented by indoor sports and a well-equipped gym.</p>
        </div>

        <div class="swiper sportsSwiper">
            <div class="swiper-wrapper">
                <!-- Cricket Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1817/9.jpg"
                                alt="Students playing cricket"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 bg-light-blue flex-grow">
                            <h4 class="text-xl font-bold text-primary mb-2">Cricket</h4>
                            <p class="text-gray-700 text-sm">The Spirit of Cricket, The Pride of Campus</p>
                        </div>
                    </article>
                </div>

                <!-- Football Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1803/10.jpg"
                                alt="Students playing football"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 bg-light-blue flex-grow">
                            <h4 class="text-xl font-bold text-primary mb-2">Football</h4>
                            <p class="text-gray-700 text-sm">Kicking Dreams Into Reality</p>
                        </div>
                    </article>
                </div>

                <!-- Table Tennis Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1798/12.jpg"
                                alt="Indoor table tennis facility"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 bg-light-blue flex-grow">
                            <h4 class="text-xl font-bold text-primary mb-2">Table Tennis</h4>
                            <p class="text-gray-700 text-sm">Where Speed Meets Strategy</p>
                        </div>
                    </article>
                </div>

                <!-- 8 Ball Pool Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1805/11.jpg" alt="8 Ball Pool table"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 bg-light-blue flex-grow">
                            <h4 class="text-xl font-bold text-primary mb-2">8 Ball Pool</h4>
                            <p class="text-gray-700 text-sm">The Perfect Break Starts Here</p>
                        </div>
                    </article>
                </div>

                <!-- Badminton Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1819/15.jpg"
                                alt="Indoor badminton court"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 bg-light-blue flex-grow">
                            <h4 class="text-xl font-bold text-primary mb-2">Badminton</h4>
                            <p class="text-gray-700 text-sm">The Power of Precision</p>
                        </div>
                    </article>
                </div>

                <!-- Gymnasium Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1812/13.jpg"
                                alt="Well-equipped gymnasium"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 bg-light-blue flex-grow">
                            <h4 class="text-xl font-bold text-primary mb-2">Gymnasium</h4>
                            <p class="text-gray-700 text-sm">Train Hard, Rise Higher</p>
                        </div>
                    </article>
                </div>

                <!-- Volleyball Card -->
                <div class="swiper-slide h-auto">
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-lg transition h-full flex flex-col">
                        <div class="relative overflow-hidden h-[260px]">
                            <img src="https://geetauniversity.edu.in/uploads/all/1818/14.jpg" alt="Volleyball court"
                                class="w-full h-full object-cover transition-transform duration-600 ease-out"
                                width="400" height="260" loading="lazy">
                        </div>
                        <div class="p-6 bg-light-blue flex-grow">
                            <h4 class="text-xl font-bold text-primary mb-2">Volleyball</h4>
                            <p class="text-gray-700 text-sm">Building Teams, Creating Champions</p>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="max-w-7xl mx-auto px-4 py-10" id="events">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Events</h2>
    <div class="h-1 w-20 bg-gradient-to-r from-primary to-primary-light my-4 rounded-sm"></div>
    <p class="text-gray-600 mb-12 max-w-3xl">Experience the vibrant cultural and academic events that make Geeta
        University a hub of creativity and innovation.</p>

    <!-- Video Thumbnail -->
    <div class="flex justify-center items-center mb-12">
        <div class="relative w-full md:w-2/3 lg:w-1/2">
            <img src="https://geetauniversity.edu.in/uploads/all/1797/16.jpg" alt="University events showcase"
                class="w-full rounded-3xl shadow-2xl cursor-pointer transition-transform hover:scale-105"
                onclick="openVideoModal('https://www.youtube.com/embed/D-TW0dcqMDA?autoplay=1')" width="800"
                height="450" loading="lazy">
            <button
                class="play-button w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 shadow-[0_8px_30px_rgba(0,0,0,0.3)] hover:scale-110 hover:shadow-[0_12px_40px_rgba(0,0,0,0.4)] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                onclick="openVideoModal('https://www.youtube.com/embed/D-TW0dcqMDA?autoplay=1')"
                aria-label="Play Events Video"></button>
        </div>
    </div>

    <!-- Events Swiper -->
    <div class="swiper eventsSwiper">
        <div class="swiper-wrapper">
            <!-- Sports Meet Card -->
            <div class="swiper-slide h-auto">
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-all duration-400 ease-out hover:-translate-y-2 hover:shadow-[0_12px_35px_rgba(0,0,0,0.15)] h-full flex flex-col">
                    <div class="relative overflow-hidden h-[260px]">
                        <img src="https://geetauniversity.edu.in/uploads/all/1825/27.jpg" alt="Annual Sports Meet"
                            class="w-full h-full object-cover transition-transform duration-600 ease-out" width="400"
                            height="260" loading="lazy">
                    </div>
                    <div class="p-6 bg-light-blue flex-grow">
                        <h4 class="text-xl font-bold text-primary mb-2">Sports Meet</h4>
                        <p class="text-gray-700 text-sm">Celebrating Sports, Celebrating Spirit</p>
                    </div>
                </article>
            </div>

            <!-- Bizz Fiesta Card -->
            <div class="swiper-slide h-auto">
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-all duration-400 ease-out hover:-translate-y-2 hover:shadow-[0_12px_35px_rgba(0,0,0,0.15)] h-full flex flex-col">
                    <div class="relative overflow-hidden h-[260px]">
                        <img src="https://geetauniversity.edu.in/uploads/all/1799/17.jpg" alt="Bizz Fiesta event"
                            class="w-full h-full object-cover transition-transform duration-600 ease-out" width="400"
                            height="260" loading="lazy">
                    </div>
                    <div class="p-6 bg-light-blue flex-grow">
                        <h4 class="text-xl font-bold text-primary mb-2">Bizz Fiesta</h4>
                        <p class="text-gray-700 text-sm">Celebrating Creativity, Strategy & Success</p>
                    </div>
                </article>
            </div>

            <!-- Sangri'la Card -->
            <div class="swiper-slide h-auto">
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-all duration-400 ease-out hover:-translate-y-2 hover:shadow-[0_12px_35px_rgba(0,0,0,0.15)] h-full flex flex-col">
                    <div class="relative overflow-hidden h-[260px]">
                        <img src="https://geetauniversity.edu.in/uploads/all/1807/26.jpg"
                            alt="Sangri'la cultural festival"
                            class="w-full h-full object-cover transition-transform duration-600 ease-out" width="400"
                            height="260" loading="lazy">
                    </div>
                    <div class="p-6 bg-light-blue flex-grow">
                        <h4 class="text-xl font-bold text-primary mb-2">Sangri'la</h4>
                        <p class="text-gray-700 text-sm">One Stage, Infinite Stories</p>
                    </div>
                </article>
            </div>

            <!-- Literature Fest Card -->
            <div class="swiper-slide h-auto">
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-all duration-400 ease-out hover:-translate-y-2 hover:shadow-[0_12px_35px_rgba(0,0,0,0.15)] h-full flex flex-col">
                    <div class="relative overflow-hidden h-[260px]">
                        <img src="https://geetauniversity.edu.in/uploads/all/1811/28.jpg" alt="Literature Festival"
                            class="w-full h-full object-cover transition-transform duration-600 ease-out" width="400"
                            height="260" loading="lazy">
                    </div>
                    <div class="p-6 bg-light-blue flex-grow">
                        <h4 class="text-xl font-bold text-primary mb-2">Literature Fest</h4>
                        <p class="text-gray-700 text-sm">Unfolding Thoughts, Uniting Minds</p>
                    </div>
                </article>
            </div>

            <!-- Orientation Card -->
            <div class="swiper-slide h-auto">
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-all duration-400 ease-out hover:-translate-y-2 hover:shadow-[0_12px_35px_rgba(0,0,0,0.15)] h-full flex flex-col">
                    <div class="relative overflow-hidden h-[260px]">
                        <img src="https://geetauniversity.edu.in/uploads/all/1810/30.jpg" alt="New student orientation"
                            class="w-full h-full object-cover transition-transform duration-600 ease-out" width="400"
                            height="260" loading="lazy">
                    </div>
                    <div class="p-6 bg-light-blue flex-grow">
                        <h4 class="text-xl font-bold text-primary mb-2">Orientation</h4>
                        <p class="text-gray-700 text-sm">From Fresh Faces to Family</p>
                    </div>
                </article>
            </div>

            <!-- Fashion Parade Card -->
            <div class="swiper-slide h-auto">
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-all duration-400 ease-out hover:-translate-y-2 hover:shadow-[0_12px_35px_rgba(0,0,0,0.15)] h-full flex flex-col">
                    <div class="relative overflow-hidden h-[260px]">
                        <img src="https://geetauniversity.edu.in/uploads/all/1823/29.jpg" alt="Fashion Parade"
                            class="w-full h-full object-cover transition-transform duration-600 ease-out" width="400"
                            height="260" loading="lazy">
                    </div>
                    <div class="p-6 bg-light-blue flex-grow">
                        <h4 class="text-xl font-bold text-primary mb-2">Fashion Parade</h4>
                        <p class="text-gray-700 text-sm">Fashion in Motion, Elegance in Action</p>
                    </div>
                </article>
            </div>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="bg-gray-50 py-16" id="eminent-personalities">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Heading -->
        <div class="mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Eminent Personalities at GU</h2>
            <div class="h-1 w-20 bg-gradient-to-r from-primary to-primary-light my-4 rounded-sm"></div>
            <p class="text-gray-600 max-w-2xl">
                Distinguished leaders, innovators and public figures who have visited and inspired our students.
            </p>
        </div>

        <!-- Swiper for Eminent Personalities -->
        <div class="swiper eminentSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1815/18.jpg" alt="Guest at Geeta University"
                        loading="lazy" class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>

                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1808/19.jpg" alt="Speaker addressing students"
                        loading="lazy" class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>

                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1802/20.jpg" alt="Celebrity visit"
                        loading="lazy" class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>

                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1816/21.jpg" alt="Dignitary interaction"
                        loading="lazy" class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>

                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1820/22.jpg" alt="Chief guest at ceremony"
                        loading="lazy" class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>

                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1824/23.jpg"
                        alt="Honored guest delivering speech" loading="lazy"
                        class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>

                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1806/24.jpg" alt="Distinguished visitor"
                        loading="lazy" class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>

                <div class="swiper-slide">
                    <img src="https://geetauniversity.edu.in/uploads/all/1804/25.jpg" alt="Notable speaker"
                        loading="lazy" class="w-full rounded-2xl h-full shadow-md hover:shadow-xl transition" />
                </div>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Video Modal -->
<div id="videoModal"
    class="fixed inset-0 bg-black bg-opacity-90 z-[9999] flex items-center justify-center p-5 opacity-0 invisible transition-all duration-300 ease-in-out">
    <div
        class="bg-white rounded-2xl max-w-[1200px] w-full overflow-hidden scale-90 transition-transform duration-300 ease-in-out">
        <div class="flex justify-end p-4">
            <button
                class="bg-transparent border-0 text-3xl cursor-pointer text-gray-600 hover:text-black hover:bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full transition-all"
                onclick="closeVideoModal()" aria-label="Close video modal">
                &times;
            </button>
        </div>
        <div class="relative pb-[56.25%] h-0 overflow-hidden">
            <iframe id="videoIframe" src="" title="Video Player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen class="absolute top-0 left-0 w-full h-full"></iframe>
        </div>
    </div>
</div>

<script>
    // Video Modal Functions
    function openVideoModal(videoUrl) {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoIframe');
        iframe.src = videoUrl;
        modal.classList.remove('opacity-0', 'invisible');
        modal.querySelector('.bg-white').classList.remove('scale-90');
        modal.querySelector('.bg-white').classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoIframe');
        iframe.src = '';
        modal.classList.add('opacity-0', 'invisible');
        modal.querySelector('.bg-white').classList.remove('scale-100');
        modal.querySelector('.bg-white').classList.add('scale-90');
        document.body.style.overflow = 'auto';
    }

    // Close modal on outside click
    document.getElementById('videoModal').addEventListener('click', function (e) {
        if (e.target === this) closeVideoModal();
    });

    // Close modal on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeVideoModal();
    });


    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                }
            });
        }, {
            rootMargin: '50px'
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
</script>
<?php require INCLUDES_PATH . '/footer.php'; ?>