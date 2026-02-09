<!-- Video Modal -->
<div id="video-modal" class="fixed inset-0 z-[60] hidden items-center justify-center bg-white/70 ">

    <div class="relative w-full max-w-4xl mx-4 rounded-lg overflow-hidden pt-10 bg-white">

        <button id="close-video" class="absolute top-3 right-3 z-10 text-black text-2xl">
            ✕
        </button>

        <div class="relative pt-[56.25%]">
            <iframe id="youtube-frame" class="absolute inset-0 w-full h-full" src="" title="Virtual Campus Tour"
                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
            </iframe>
        </div>

    </div>
</div>


<!-- Footer -->
<footer class="bg-primary-600 text-white mt-auto">

    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            <div>
                <img src="https://geetauniversity.edu.in/uploads/all/1985/Sp-Bansal-School-of-business.webp"
                    alt="<?php echo $config['site_name']; ?> Logo" class="h-10 w-auto">
                <p class="text-white/70 text-sm leading-relaxed my-6">
                    <?php echo $config['site_tagline']; ?>. Providing world-class management education with a focus on
                    holistic development, ethical leadership, and global perspectives.
                </p>

                <!-- Social Icons -->
                <div class="flex items-center gap-3">
                    <a href="<?php echo $config['social']['facebook']; ?>" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-white/10 hover:bg-secondary-500 rounded-lg flex items-center justify-center transition-colors"
                        aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['twitter']; ?>" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-white/10 hover:bg-secondary-500 rounded-lg flex items-center justify-center transition-colors"
                        aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['linkedin']; ?>" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-white/10 hover:bg-secondary-500 rounded-lg flex items-center justify-center transition-colors"
                        aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['instagram']; ?>" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-white/10 hover:bg-secondary-500 rounded-lg flex items-center justify-center transition-colors"
                        aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="<?php echo $config['social']['youtube']; ?>" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-white/10 hover:bg-secondary-500 rounded-lg flex items-center justify-center transition-colors"
                        aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-semibold text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="/about/" class="text-white/70 hover:text-secondary-400 transition-colors">About Us</a>
                    </li>
                    <li><a href="/programs/"
                            class="text-white/70 hover:text-secondary-400 transition-colors">Programs</a>
                    </li>
                    <li><a href="/admissions/"
                            class="text-white/70 hover:text-secondary-400 transition-colors">Admissions</a></li>
                    <li><a href="/contact/" class="text-white/70 hover:text-secondary-400 transition-colors">Contact
                            Us</a>
                    </li>
                </ul>
            </div>


            <div>
                <h4 class="font-semibold text-lg mb-6">Contact Us</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-white flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-white/70"><?php echo $config['contact']['address']; ?></span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:<?php echo $config['contact']['phone']; ?>"
                            class="text-white/70 hover:text-secondary-400 transition-colors"><?php echo $config['contact']['phone']; ?></a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:<?php echo $config['contact']['email']; ?>"
                            class="text-white/70 hover:text-secondary-400 transition-colors"><?php echo $config['contact']['email']; ?></a>
                    </li>
                </ul>

                <!-- Admissions CTA -->
                <div class="mt-6 p-4 bg-white/10 rounded-lg">
                    <p class="text-sm font-semibold mb-2">Admissions Open 2026-27</p>
                    <a href="/admissions/apply/"
                        class="inline-flex items-center text-sm text-secondary-400 hover:text-secondary-300 font-medium transition-colors">
                        Apply Now
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-white/60">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $config['site_name']; ?>. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="/privacy-policy/" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="/terms/" class="hover:text-white transition-colors">Terms of Use</a>
                    <a href="/sitemap/" class="hover:text-white transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="/assets/js/main.js?v=<?php echo $config['asset_version']; ?>" defer></script>
<?php if (!empty($useSwiper)): ?>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js?v=<?php echo $config['asset_version']; ?>" defer></script>
    <script src="/assets/js/swiper-init.js?v=<?php echo $config['asset_version']; ?>" defer></script>
<?php endif; ?>
</body>

</html>