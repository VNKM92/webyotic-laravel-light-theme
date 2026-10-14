<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $seo_title ?? ($siteSettings['site_name'] ?? 'Webyotic') . ' - Digital Solutions For A Brighter Tomorrow' }}</title>
    <meta name="description" content="{{ $seo_description ?? 'From strategy and design to development and growth, Webyotic helps businesses turn ideas into powerful digital products that create real impact.' }}">
    @if(!empty($seo_keywords))
    <meta name="keywords" content="{{ $seo_keywords }}">
    @endif
    <meta name="author" content="Webyotic">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $seo_title ?? ($siteSettings['site_name'] ?? 'Webyotic') }}">
    <meta property="og:description" content="{{ $seo_description ?? 'We build apps people love. Strategy, design, development and growth.' }}">
    <meta property="og:image" content="{{ asset('images/og-preview.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo_title ?? ($siteSettings['site_name'] ?? 'Webyotic') }}">
    <meta name="twitter:description" content="{{ $seo_description ?? 'From strategy and design to development and growth.' }}">

    <link rel="alternate" type="application/rss+xml" title="{{ $siteSettings['site_name'] ?? 'Webyotic' }} RSS Feed" href="{{ route('feed') }}">

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org Organization & WebSite Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "{{ url('/#organization') }}",
          "name": "{{ $siteSettings['site_name'] ?? 'Webyotic' }}",
          "url": "{{ url('/') }}",
          "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('images/logo.png') }}"
          },
          "description": "Leading SEO digital agency and custom software programming studio specializing in Laravel, Next.js, mobile apps, and programmatic organic search dominance.",
          "founder": [
            {
              "@type": "Person",
              "name": "Vinay",
              "jobTitle": "Head of Engineering & Architecture"
            },
            {
              "@type": "Person",
              "name": "Shivam",
              "jobTitle": "Chief Creative & Growth Strategist"
            }
          ],
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "{{ $siteSettings['contact_phone'] ?? '+91 89883 13005' }}",
            "contactType": "customer service",
            "email": "{{ $siteSettings['contact_email'] ?? 'hello@webyotic.com' }}"
          },
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Ludhiana",
            "addressRegion": "Punjab",
            "addressCountry": "India"
          },
          "knowsAbout": [
            "Search Engine Optimization",
            "Technical SEO",
            "Programmatic SEO",
            "Web Development",
            "Custom Software Programming",
            "Laravel Engineering",
            "Next.js Architecture",
            "Mobile Application Development",
            "UI/UX Design Systems"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "{{ url('/#website') }}",
          "url": "{{ url('/') }}",
          "name": "{{ $siteSettings['site_name'] ?? 'Webyotic' }}",
          "description": "Enterprise software programming, custom app development, and technical SEO agency.",
          "publisher": {
            "@id": "{{ url('/#organization') }}"
          },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ route('blog') }}?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      ]
    }
    </script>
</head>
<body class="bg-white text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white min-h-screen flex flex-col relative overflow-x-hidden" x-data="{ mobileMenuOpen: false, searchOpen: false, consultationModalOpen: false }">

    {{-- Header Ad Injection if active --}}
    {!! optional(\App\Models\Ad::where('is_active', true)->where('location', 'header_top')->first())->code !!}

    <!-- Clean Modern Sticky Navigation Header -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100 transition-all duration-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo (Webyotic + Tagline) -->
                <a href="{{ route('home') }}" class="group flex items-center space-x-3.5 focus:outline-none">
                    <!-- Stylized Ribbon "W" Logo -->
                    <div class="relative w-10 h-10 flex-shrink-0">
                        <svg class="w-full h-full transform transition-transform group-hover:scale-105 duration-200" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="wGrad1" x1="0" y1="0" x2="44" y2="44" gradientUnits="userSpaceOnUse">
                                    <stop offset="0%" stop-color="#2563EB"/>
                                    <stop offset="50%" stop-color="#4F46E5"/>
                                    <stop offset="100%" stop-color="#06B6D4"/>
                                </linearGradient>
                                <linearGradient id="wGrad2" x1="44" y1="0" x2="0" y2="44" gradientUnits="userSpaceOnUse">
                                    <stop offset="0%" stop-color="#06B6D4"/>
                                    <stop offset="100%" stop-color="#3B82F6"/>
                                </linearGradient>
                            </defs>
                            <!-- Modern Geometric Stylized W Shape with smooth ribbons -->
                            <path d="M6 10L14 34L22 18L30 34L38 10" stroke="url(#wGrad1)" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="6" cy="10" r="2.5" fill="#2563EB"/>
                            <circle cx="38" cy="10" r="2.5" fill="#06B6D4"/>
                        </svg>
                    </div>

                    <div class="flex flex-col">
                        <span class="font-display font-extrabold text-2xl tracking-tight text-slate-900 group-hover:text-blue-600 transition-colors leading-none">
                            Webyotic
                        </span>
                        <span class="text-[9px] font-medium tracking-wider text-slate-400 mt-1 uppercase">
                            Ideas · Design · Develop · Grow
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <!-- Home -->
                    <a href="{{ route('home') }}" class="relative text-sm font-semibold transition-colors {{ request()->routeIs('home') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                        Home
                        @if(request()->routeIs('home'))
                            <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-blue-600 rounded-full"></span>
                        @endif
                    </a>

                    <!-- Services Dropdown -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button type="button" @click="open = !open" class="flex items-center space-x-1.5 text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors focus:outline-none">
                            <span>Services</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                        </button>

                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-150" 
                             x-transition:enter-start="opacity-0 translate-y-2" 
                             x-transition:enter-end="opacity-100 translate-y-0" 
                             x-transition:leave="transition ease-in duration-100" 
                             x-transition:leave-start="opacity-100 translate-y-0" 
                             x-transition:leave-end="opacity-0 translate-y-2" 
                             class="absolute top-full left-0 w-72 pt-3 z-50" 
                             style="display: none;">
                            <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 p-3 space-y-1">
                                @forelse($navServices ?? \App\Models\Service::take(6)->get() as $srv)
                                    <a href="{{ route('services') }}" class="flex items-center space-x-3 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                            @if(str_contains(strtolower($srv->title), 'brand'))
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                                            @elseif(str_contains(strtolower($srv->title), 'ux') || str_contains(strtolower($srv->title), 'ui'))
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                            @elseif(str_contains(strtolower($srv->title), 'app') || str_contains(strtolower($srv->title), 'dev'))
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                            @elseif(str_contains(strtolower($srv->title), 'market') || str_contains(strtolower($srv->title), 'growth'))
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                            @elseif(str_contains(strtolower($srv->title), 'conver') || str_contains(strtolower($srv->title), 'optimi'))
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                            @else
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                            @endif
                                        </div>
                                        <div>
                                            <div class="text-xs font-semibold text-slate-900 group-hover:text-blue-600 transition-colors">{{ $srv->title }}</div>
                                            <div class="text-[11px] text-slate-500 line-clamp-1">{{ $srv->short_description }}</div>
                                        </div>
                                    </a>
                                @empty
                                    <a href="{{ route('services') }}" class="block p-2 text-xs text-slate-600 hover:text-blue-600">View Services</a>
                                @endforelse
                                <div class="pt-2 border-t border-slate-100">
                                    <a href="{{ route('services') }}" class="block px-3 py-1.5 text-center text-xs font-semibold text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 rounded-lg transition-colors">
                                        View All Services →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Our Work -->
                    <a href="{{ route('home') }}#work" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors">
                        Our Work
                    </a>

                    <!-- About -->
                    <a href="{{ route('about') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors {{ request()->routeIs('about') ? 'text-blue-600 font-semibold' : '' }}">
                        About
                    </a>

                    <!-- Insights Dropdown -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button type="button" @click="open = !open" class="flex items-center space-x-1.5 text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors focus:outline-none">
                            <span>Insights</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-150" 
                             x-transition:enter-start="opacity-0 translate-y-2" 
                             x-transition:enter-end="opacity-100 translate-y-0" 
                             x-transition:leave="transition ease-in duration-100" 
                             x-transition:leave-start="opacity-100 translate-y-0" 
                             x-transition:leave-end="opacity-0 translate-y-2" 
                             class="absolute top-full left-0 w-48 pt-3 z-50" 
                             style="display: none;">
                            <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 p-2 space-y-1">
                                <a href="{{ route('blog') }}" class="flex items-center space-x-2.5 px-3 py-2 rounded-xl text-xs font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                                    <span>Blog & Insights</span>
                                </a>
                                <a href="{{ route('gallery') }}" class="flex items-center space-x-2.5 px-3 py-2 rounded-xl text-xs font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                                    <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>Case Studies</span>
                                </a>
                                <a href="{{ route('testimonials') }}" class="flex items-center space-x-2.5 px-3 py-2 rounded-xl text-xs font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                                    <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                                    <span>Client Reviews</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact -->
                    <a href="{{ route('contact') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors {{ request()->routeIs('contact') ? 'text-blue-600 font-semibold' : '' }}">
                        Contact
                    </a>
                </nav>

                <!-- Right Actions: Search & Consultation Button -->
                <div class="flex items-center space-x-4">
                    <!-- Search Trigger Icon -->
                    <button @click="searchOpen = true" type="button" aria-label="Search" class="p-2 text-slate-600 hover:text-blue-600 hover:bg-slate-50 rounded-full transition-colors focus:outline-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </button>

                    <!-- Book a Free Consultation Button -->
                    <a href="#consultation" class="hidden sm:inline-flex items-center space-x-2 px-6 py-2.5 rounded-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold shadow-md shadow-blue-500/20 hover:shadow-blue-500/30 transition-all hover:scale-[1.02] active:scale-[0.98]">
                        <span>Book a Free Consultation</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="lg:hidden p-2 rounded-xl text-slate-700 hover:bg-slate-100 focus:outline-none">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200" 
             x-transition:enter-start="opacity-0 -translate-y-4" 
             x-transition:enter-end="opacity-100 translate-y-0" 
             x-transition:leave="transition ease-in duration-150" 
             x-transition:leave-start="opacity-100 translate-y-0" 
             x-transition:leave-end="opacity-0 -translate-y-4" 
             class="lg:hidden bg-white border-b border-slate-200 px-6 py-6 space-y-4 shadow-xl" 
             style="display: none;">
            <nav class="flex flex-col space-y-3">
                <a @click="mobileMenuOpen = false" href="{{ route('home') }}" class="px-3 py-2 rounded-lg text-sm font-semibold {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600' : 'text-slate-700 hover:bg-slate-50' }}">Home</a>
                <a @click="mobileMenuOpen = false" href="{{ route('services') }}" class="px-3 py-2 rounded-lg text-sm font-semibold {{ request()->routeIs('services') ? 'bg-blue-50 text-blue-600' : 'text-slate-700 hover:bg-slate-50' }}">Services</a>
                <a @click="mobileMenuOpen = false" href="{{ route('home') }}#work" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-50">Our Work</a>
                <a @click="mobileMenuOpen = false" href="{{ route('about') }}" class="px-3 py-2 rounded-lg text-sm font-semibold {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-600' : 'text-slate-700 hover:bg-slate-50' }}">About Us</a>
                <a @click="mobileMenuOpen = false" href="{{ route('blog') }}" class="px-3 py-2 rounded-lg text-sm font-semibold {{ request()->routeIs('blog*') ? 'bg-blue-50 text-blue-600' : 'text-slate-700 hover:bg-slate-50' }}">Insights</a>
                <a @click="mobileMenuOpen = false" href="{{ route('contact') }}" class="px-3 py-2 rounded-lg text-sm font-semibold {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-600' : 'text-slate-700 hover:bg-slate-50' }}">Contact</a>
            </nav>
            <div class="pt-3 border-t border-slate-100">
                <a @click="mobileMenuOpen = false" href="#consultation" class="w-full flex items-center justify-center space-x-2 py-3 rounded-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold shadow-md shadow-blue-500/20">
                    <span>Book a Free Consultation</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </header>

    <!-- Global Floating Search Modal -->
    <div x-show="searchOpen" 
         x-transition:enter="transition ease-out duration-200" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-150" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0" 
         class="fixed inset-0 z-50 flex items-start justify-center pt-24 px-4 bg-slate-900/60 backdrop-blur-sm" 
         style="display: none;" 
         @keydown.escape.window="searchOpen = false">
        
        <div class="fixed inset-0" @click="searchOpen = false"></div>

        <div class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl border border-slate-100 overflow-hidden z-10" @click.stop>
            <form action="{{ route('blog') }}" method="GET" class="flex items-center px-4 py-3 border-b border-slate-100">
                <svg class="w-5 h-5 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" name="q" placeholder="Search services, case studies, insights..." class="w-full bg-transparent border-0 text-slate-800 text-sm focus:outline-none focus:ring-0 placeholder-slate-400">
                <button type="button" @click="searchOpen = false" class="text-xs text-slate-400 hover:text-slate-600 px-2 py-1 rounded bg-slate-100">ESC</button>
            </form>
            <div class="p-4 bg-slate-50 text-xs text-slate-500 flex items-center justify-between">
                <span>Quick links:</span>
                <div class="flex items-center space-x-2">
                    <a href="{{ route('services') }}" class="text-blue-600 hover:underline">Services</a>
                    <span>•</span>
                    <a href="{{ route('gallery') }}" class="text-blue-600 hover:underline">Case Studies</a>
                    <span>•</span>
                    <a href="{{ route('blog') }}" class="text-blue-600 hover:underline">Articles</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Global Toast Notifications -->
    <div class="fixed top-24 right-4 z-50 max-w-md w-full pointer-events-none space-y-3">
        @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 7000)" class="pointer-events-auto flex items-start p-4 rounded-2xl bg-white border border-emerald-200 shadow-xl shadow-emerald-500/10 border-l-4 border-l-emerald-500 animate-fade-in-up">
            <div class="flex-shrink-0 text-emerald-500 mr-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="flex-1">
                <h4 class="text-xs font-bold text-slate-900">Success</h4>
                <p class="text-xs text-slate-600 mt-0.5">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="text-slate-400 hover:text-slate-600 ml-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        @endif

        @if(isset($errors) && $errors->any())
        <div x-data="{ show: true }" x-show="show" class="pointer-events-auto flex items-start p-4 rounded-2xl bg-white border border-rose-200 shadow-xl border-l-4 border-l-rose-500 animate-fade-in-up">
            <div class="flex-shrink-0 text-rose-500 mr-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="flex-1">
                <h4 class="text-xs font-bold text-slate-900">Please check your inputs</h4>
                <ul class="text-xs text-rose-600 mt-1 list-disc list-inside">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button @click="show = false" class="text-slate-400 hover:text-slate-600 ml-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        @endif
    </div>

    <!-- Main Content Slot -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Clean Modern Footer Matching Template -->
    <footer class="bg-white border-t border-slate-200/90 text-slate-600 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-8 pb-12 border-b border-slate-100">
                
                <!-- Col 1: Brand & Tagline -->
                <div class="lg:col-span-1 space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-9 h-9 flex-shrink-0">
                            <svg class="w-full h-full" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="wGradFoot" x1="0" y1="0" x2="44" y2="44" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#2563EB"/>
                                        <stop offset="50%" stop-color="#4F46E5"/>
                                        <stop offset="100%" stop-color="#06B6D4"/>
                                    </linearGradient>
                                </defs>
                                <path d="M6 10L14 34L22 18L30 34L38 10" stroke="url(#wGradFoot)" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-display font-extrabold text-2xl text-slate-900 tracking-tight leading-none">
                                Webyotic
                            </span>
                            <span class="text-[9px] font-medium tracking-wider text-slate-400 mt-1 uppercase">
                                Ideas · Design · Develop · Grow
                            </span>
                        </div>
                    </a>
                    <p class="text-xs text-slate-500 leading-relaxed max-w-xs">
                        Empowering forward-thinking companies through world-class engineering, bespoke product design, and sustainable growth architectures.
                    </p>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Quick Links</h4>
                    <ul class="space-y-2 text-xs font-medium text-slate-600">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-600 transition-colors">About Us</a></li>
                        <li><a href="{{ route('home') }}#work" class="hover:text-blue-600 transition-colors">Our Work</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">Services</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-blue-600 transition-colors">Insights (Blog)</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-600 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Our Services -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Our Services</h4>
                    <ul class="space-y-2 text-xs font-medium text-slate-600">
                        @forelse($navServices ?? \App\Models\Service::take(6)->get() as $srv)
                            <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">{{ $srv->title }}</a></li>
                        @empty
                            <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">Strategy & Planning</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">Brand Design</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">UX/UI Design</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">App Development</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">Marketing & Growth</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">Conversion Optimization</a></li>
                        @endforelse
                    </ul>
                </div>

                <!-- Col 4: Follow Us -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Follow Us</h4>
                    <div class="flex items-center space-x-3 text-slate-500">
                        <!-- LinkedIn -->
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-blue-600 hover:text-white flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <!-- Twitter/X -->
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-900 hover:text-white flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-blue-600 hover:text-white flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-pink-600 hover:text-white flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-red-600 hover:text-white flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Col 5: Contact Us -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Contact Us</h4>
                    <div class="space-y-2.5 text-xs text-slate-600">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:{{ $siteSettings['contact_email'] ?? 'hello@webyotic.com' }}" class="hover:text-blue-600 transition-colors">{{ $siteSettings['contact_email'] ?? 'hello@webyotic.com' }}</a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['contact_phone'] ?? '+918988313005') }}" class="hover:text-blue-600 transition-colors">{{ $siteSettings['contact_phone'] ?? '+91 89883 13005' }}</a>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>{{ $siteSettings['contact_location'] ?? 'Ludhiana, Punjab, India' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: Copyright & Policy Links -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>{{ $siteSettings['footer_text'] ?? '© 2024 Webyotic. All rights reserved.' }} Built by Vinay &amp; Shivam.</p>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('about') }}" class="hover:text-blue-600 transition-colors">Privacy Policy</a>
                    <span class="text-slate-300">|</span>
                    <a href="{{ route('about') }}" class="hover:text-blue-600 transition-colors">Terms &amp; Conditions</a>
                    <span class="text-slate-300">|</span>
                    <a href="{{ route('login') }}" class="text-slate-400 hover:text-blue-600 transition-colors">Admin Gateway</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Footer Ad Injection if active --}}
    {!! optional(\App\Models\Ad::where('is_active', true)->where('location', 'footer_bottom')->first())->code !!}

    @stack('scripts')
</body>
</html>
