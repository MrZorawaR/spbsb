/**
 * SPBSB Institute - Main JavaScript
 * Minimal, performance-focused JS for essential interactions only
 * Total budget: < 5KB minified
 */

(function () {
  "use strict";

  // DOM Elements
  const header = document.getElementById("site-header");
  const menuBtn = document.getElementById("menu-btn");
  const menuClose = document.getElementById("menu-close");
  const mobileMenu = document.getElementById("mobile-menu");
  const backdrop = document.getElementById("menu-backdrop");

  // ============================================
  // 1. Sticky Header Shadow on Scroll
  // ============================================
  let lastScrollY = 0;
  let ticking = false;

  function updateHeader() {
    const scrollY = window.scrollY;

    if (scrollY > 10) {
      header.classList.add("shadow-lg");
    } else {
      header.classList.remove("shadow-lg");
    }

    ticking = false;
  }

  window.addEventListener(
    "scroll",
    function () {
      lastScrollY = window.scrollY;
      if (!ticking) {
        window.requestAnimationFrame(updateHeader);
        ticking = true;
      }
    },
    { passive: true },
  );

  // ============================================
  // 2. Mobile Menu Toggle
  // ============================================
  function openMenu() {
    mobileMenu.classList.remove("translate-x-full");
    backdrop.classList.remove("opacity-0", "invisible");
    backdrop.classList.add("opacity-100", "visible");
    document.body.style.overflow = "hidden";

    // Focus trap - focus first focusable element
    const firstFocusable = mobileMenu.querySelector("button, a, details");
    if (firstFocusable) firstFocusable.focus();
  }

  function closeMenu() {
    mobileMenu.classList.add("translate-x-full");
    backdrop.classList.add("opacity-0", "invisible");
    backdrop.classList.remove("opacity-100", "visible");
    document.body.style.overflow = "";

    // Return focus to menu button
    if (menuBtn) menuBtn.focus();
  }

  if (menuBtn) {
    menuBtn.addEventListener("click", openMenu);
  }

  if (menuClose) {
    menuClose.addEventListener("click", closeMenu);
  }

  if (backdrop) {
    backdrop.addEventListener("click", closeMenu);
  }

  // ============================================
  // 3. Hero Slider
  // ============================================
  const slides = document.querySelectorAll(".hero-slide");
  const heroPrevBtn = document.getElementById("hero-prev");
  const heroNextBtn = document.getElementById("hero-next");
  const heroSection = document.getElementById("hero");

  if (slides.length > 1) {
    let currentSlide = 0;
    let autoplayTimer = null;
    const AUTOPLAY_DELAY = 3000;

    function resetSlide(slide) {
      slide.classList.remove("is-active", "opacity-100");
      slide.classList.add("opacity-0");
      slide.setAttribute("aria-hidden", "true");

      // reset animated children
      slide.querySelectorAll(".hero-anim").forEach((el) => {
        el.style.transitionDelay = "";
      });
    }

    function activateSlide(slide) {
      slide.classList.add("is-active");
      slide.classList.remove("opacity-0");

      // force repaint so animations restart cleanly
      void slide.offsetHeight;

      slide.classList.add("opacity-100");
      slide.setAttribute("aria-hidden", "false");
    }

    function showSlide(index) {
      slides.forEach(resetSlide);
      activateSlide(slides[index]);
      currentSlide = index;
    }

    function nextSlide() {
      showSlide((currentSlide + 1) % slides.length);
    }

    function prevSlide() {
      showSlide((currentSlide - 1 + slides.length) % slides.length);
    }

    function startAutoplay() {
      stopAutoplay();
      autoplayTimer = setInterval(nextSlide, AUTOPLAY_DELAY);
    }

    function stopAutoplay() {
      if (autoplayTimer) {
        clearInterval(autoplayTimer);
        autoplayTimer = null;
      }
    }

    // Controls
    heroPrevBtn?.addEventListener("click", () => {
      prevSlide();
      startAutoplay();
    });

    heroNextBtn?.addEventListener("click", () => {
      nextSlide();
      startAutoplay();
    });

    // Pause on hover (desktop)
    heroSection?.addEventListener("mouseenter", stopAutoplay);
    heroSection?.addEventListener("mouseleave", startAutoplay);

    // Init first slide cleanly
    showSlide(0);
    startAutoplay();
  }

  // ============================================
  // 4. Keyboard Accessibility
  // ============================================
  document.addEventListener("keydown", function (e) {
    // Escape key closes mobile menu
    if (
      e.key === "Escape" &&
      !mobileMenu.classList.contains("translate-x-full")
    ) {
      closeMenu();
    }
  });

  // ============================================
  // 4. Smooth Scroll for Anchor Links
  // ============================================
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href === "#") return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // ============================================
  // 5. Intersection Observer for Animations
  // ============================================
  // Only animate elements that have the 'animate-on-scroll' class
  const animatedElements = document.querySelectorAll(".animate-on-scroll");

  if (animatedElements.length > 0 && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate-fade-in");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      },
    );

    animatedElements.forEach(function (el) {
      el.style.opacity = "0";
      observer.observe(el);
    });
  }

  const openVideoBtn = document.getElementById("open-video");
  const closeVideoBtn = document.getElementById("close-video");
  const videoModal = document.getElementById("video-modal");
  const iframe = document.getElementById("youtube-frame");


  openVideoBtn.addEventListener("click", () => {
    iframe.src = `https://www.youtube.com/embed/arnFS6rf454?si=Q4wO0zz2W1yic6wy&autoplay=1`;
    videoModal.classList.remove("hidden");
    videoModal.classList.add("flex");
    document.body.classList.add("overflow-hidden");
  });

  closeVideoBtn.addEventListener("click", closeModal);

  // Close on overlay click
  videoModal.addEventListener("click", (e) => {
    if (e.target === videoModal) {
      closeModal();
    }
  });

  function closeModal() {
    iframe.src = ""; // stops video
    videoModal.classList.add("hidden");
    videoModal.classList.remove("flex");
    document.body.classList.remove("overflow-hidden");
  }
})();
