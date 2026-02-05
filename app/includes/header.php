<?php
$config = require __DIR__ . '/../config/site.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/meta.php'; ?>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body class="antialiased text-gray-900">
<header id="site-header"
  class="fixed top-0 inset-x-0 z-50 bg-white border-b border-gray-200 transition-shadow duration-300">

  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between h-[88px]">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-3">
        <img src="/assets/images/logo.webp"
             alt="Institute Logo"
             class="h-12 w-auto">
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex items-center gap-10 text-[15px] font-medium text-gray-800">

        <!-- Academics Mega -->
        <div class="relative group">
          <span
            class="cursor-pointer py-8 border-b-2 border-transparent group-hover:border-blue-700 transition">
            Academics
          </span>

          <!-- Mega Menu -->
          <div
            class="absolute left-1/2 -translate-x-1/2 top-full mt-1
                   w-[860px] bg-white shadow-2xl border border-gray-200
                   opacity-0 invisible group-hover:opacity-100 group-hover:visible
                   transition-all duration-200">

            <div class="grid grid-cols-3 gap-8 p-8 text-sm">

              <div>
                <h4 class="font-semibold text-gray-900 mb-3">
                  Programmes
                </h4>
                <ul class="space-y-2">
                  <li><a href="#" class="hover:text-blue-700">PGDM</a></li>
                  <li><a href="#" class="hover:text-blue-700">PGDM IB</a></li>
                  <li><a href="#" class="hover:text-blue-700">Executive Education</a></li>
                </ul>
              </div>

              <div>
                <h4 class="font-semibold text-gray-900 mb-3">
                  Faculty & Research
                </h4>
                <ul class="space-y-2">
                  <li><a href="#" class="hover:text-blue-700">Faculty Directory</a></li>
                  <li><a href="#" class="hover:text-blue-700">Research Centres</a></li>
                  <li><a href="#" class="hover:text-blue-700">Publications</a></li>
                </ul>
              </div>

              <div>
                <h4 class="font-semibold text-gray-900 mb-3">
                  Academic Resources
                </h4>
                <ul class="space-y-2">
                  <li><a href="#" class="hover:text-blue-700">Library</a></li>
                  <li><a href="#" class="hover:text-blue-700">Academic Calendar</a></li>
                  <li><a href="#" class="hover:text-blue-700">Regulations</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <a href="/admissions/" class="py-8 border-b-2 border-transparent hover:border-blue-700 transition">
          Admissions
        </a>

        <a href="/placements/" class="py-8 border-b-2 border-transparent hover:border-blue-700 transition">
          Placements
        </a>

        <a href="/contact/" class="py-8 border-b-2 border-transparent hover:border-blue-700 transition">
          Contact
        </a>
      </nav>

      <!-- Mobile Toggle -->
      <button id="menu-btn" class="lg:hidden text-2xl">
        ☰
      </button>

    </div>
  </div>
</header>

<!-- Header Spacer -->
<div class="h-[88px]"></div>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu"
  class="fixed inset-0 z-50 bg-white transform translate-x-full transition-transform duration-300 lg:hidden">

  <!-- Top Bar -->
  <div class="flex items-center justify-between h-[88px] px-6 border-b">
    <span class="font-semibold text-lg">Menu</span>
    <button id="menu-close" class="text-2xl leading-none">✕</button>
  </div>

  <!-- Menu Content -->
  <nav class="px-6 py-6 space-y-6 text-[17px] font-medium">
    <a href="/academics/" class="block">Academics</a>
    <a href="/admissions/" class="block">Admissions</a>
    <a href="/placements/" class="block">Placements</a>
    <a href="/contact/" class="block">Contact</a>
  </nav>
</div>
