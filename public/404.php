<?php
// Force correct 404 status
http_response_code(404);

// SEO-safe meta
$title = "404 – Page Not Found | SPBSB Institute";
$description = "The page you are looking for does not exist or may have been moved. Visit SPBSB Institute homepage to explore programs and admissions.";

// DO NOT set canonical on 404
$canonical = null;

// Do NOT preload hero assets
$preload_hero = false;

// Prevent indexing (if header supports it)
$robots = "noindex, nofollow";

include __DIR__ . '/../app/includes/header.php';
?>


<main class="py-32 flex items-center justify-center px-6">
    <div class="max-w-lg w-full text-center animate-fade motion-reduce:animate-none">

        <!-- 404 -->
        <div class="text-[96px] font-extrabold text-[#b91c1c] animate-float motion-reduce:animate-none">
            404
        </div>

        <!-- Message -->
        <h1 class="text-2xl font-semibold mt-2 mb-4">
            Page Not Found
        </h1>

        <p class="text-gray-600 leading-relaxed mb-8">
            The page you are trying to access does not exist or may have been moved.
            Please use the links below to continue your journey with SPBSB Institute.
        </p>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/" class="inline-flex items-center justify-center px-6 py-3 rounded-md
                      bg-[#b91c1c] text-white font-semibold
                      hover:bg-[#991b1b] transition">
                Go to Homepage
            </a>

            <a href="/contact" class="inline-flex items-center justify-center px-6 py-3 rounded-md
                      bg-white text-gray-800 font-semibold
                      border border-gray-300
                      hover:bg-gray-100 transition">
                Contact Us
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../app/includes/footer.php'; ?>