<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Webyotic') }} - Enterprise Control Panel</title>

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Quill CSS for Rich Text Editors -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .ql-toolbar.ql-snow {
            border-color: #cbd5e1 !important;
            background: #f8fafc;
            border-radius: 0.75rem 0.75rem 0 0;
        }
        .ql-container.ql-snow {
            border-color: #cbd5e1 !important;
            background: #ffffff;
            border-radius: 0 0 0.75rem 0.75rem;
            color: #0f172a;
            min-height: 220px;
            font-size: 0.925rem;
        }
        .ql-snow .ql-stroke { stroke: #475569 !important; }
        .ql-snow .ql-fill { fill: #475569 !important; }
        .ql-snow .ql-picker { color: #475569 !important; }

        /* User-Friendly Form Controls with High Contrast and Accessible Touch Targets */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="url"],
        input[type="number"],
        input[type="search"],
        input[type="tel"],
        select,
        textarea {
            background-color: #ffffff !important;
            border: 1.5px solid #cbd5e1 !important;
            color: #0f172a !important;
            border-radius: 0.75rem;
            font-weight: 500;
            transition: all 0.15s ease-in-out;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="url"]:focus,
        input[type="number"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            border-color: #2563eb !important;
            background-color: #ffffff !important;
            color: #0f172a !important;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15) !important;
            outline: none !important;
        }
        select option {
            background-color: #ffffff !important;
            color: #0f172a !important;
            padding: 8px;
        }
        ::placeholder {
            color: #94a3b8 !important;
            opacity: 1 !important;
        }
        label {
            color: #334155 !important;
            font-weight: 600;
        }

        /* Modern Administrative Card Style */
        .admin-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 1.25rem;
            box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.05), 0 1px 2px -1px rgba(15, 23, 42, 0.05);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-brand-600 selection:text-white">
    <div class="flex h-screen overflow-hidden bg-slate-50" x-data="{ sidebarOpen: false }">
        
        <!-- Mobile Sidebar Backdrop -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-40 bg-slate-900/60 backdrop-blur-sm lg:hidden" style="display: none;"></div>

        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed z-50 inset-y-0 left-0 w-72 transition-transform duration-300 transform bg-slate-900 border-r border-slate-800 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0 flex flex-col justify-between">
            <div>
                <!-- Brand Header -->
                <div class="p-6 border-b border-slate-800 flex items-center justify-between">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-600 to-accent-600 p-0.5 shadow-md flex-shrink-0">
                            <div class="w-full h-full bg-slate-900 rounded-[10px] flex items-center justify-center font-display font-black text-lg text-white">
                                W
                            </div>
                        </div>
                        <div>
                            <span class="font-display font-extrabold text-xl text-white tracking-tight">
                                Web<span class="text-brand-400">yotic</span>
                            </span>
                            <span class="block text-[10px] font-mono tracking-widest uppercase text-brand-300 font-bold">Admin Console</span>
                        </div>
                    </a>
                    <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <!-- Navigation Groups -->
                <nav class="p-4 space-y-6">
                    
                    <!-- Group 1: Overview -->
                    <div class="space-y-1">
                        <div class="px-3 text-[10px] font-mono uppercase tracking-widest text-slate-400 font-bold mb-2">Platform Overview</div>
                        
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <div class="flex items-center space-x-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                <span>Executive Dashboard</span>
                            </div>
                        </a>

                        <a href="{{ route('admin.inquiries.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.inquiries.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <div class="flex items-center space-x-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                                <span>Client Inquiries</span>
                            </div>
                            @if(isset($unreadInquiriesCount) && $unreadInquiriesCount > 0)
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-mono font-bold bg-rose-500 text-white">
                                {{ $unreadInquiriesCount }} New
                            </span>
                            @endif
                        </a>
                    </div>

                    <!-- Group 2: Content & Core Offerings -->
                    <div class="space-y-1">
                        <div class="px-3 text-[10px] font-mono uppercase tracking-widest text-slate-400 font-bold mb-2">Core Solutions</div>

                        <a href="{{ route('admin.services.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.services.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span>Enterprise Services</span>
                        </a>

                        <a href="{{ route('admin.projects.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.projects.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span>Case Studies &amp; Projects</span>
                        </a>

                        <a href="{{ route('admin.testimonials.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.testimonials.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                            <span>Client Testimonials</span>
                        </a>

                        <a href="{{ route('admin.sliders.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.sliders.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                            <span>Hero Sliders</span>
                        </a>

                        <a href="{{ route('admin.pages.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.pages.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            <span>Page CMS &amp; SEO</span>
                        </a>
                    </div>

                    <!-- Group 3: Publications & Marketing -->
                    <div class="space-y-1">
                        <div class="px-3 text-[10px] font-mono uppercase tracking-widest text-slate-400 font-bold mb-2">Publications &amp; Marketing</div>

                        <a href="{{ route('admin.posts.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.posts.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                            <span>Engineering Articles</span>
                        </a>

                        <a href="{{ route('admin.categories.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.categories.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                            <span>Categories</span>
                        </a>

                        <a href="{{ route('admin.ads.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.ads.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Banner &amp; Ad Units</span>
                        </a>
                    </div>

                    <!-- Group 4: System -->
                    <div class="space-y-1">
                        <div class="px-3 text-[10px] font-mono uppercase tracking-widest text-slate-400 font-bold mb-2">System</div>

                        <a href="{{ route('admin.users.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.users.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            <span>Administrators</span>
                        </a>

                        <a href="{{ route('admin.settings.index') }}" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all {{ request()->routeIs('admin.settings.*') ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Global Site Settings</span>
                        </a>
                    </div>
                </nav>
            </div>

            <!-- Bottom Live Badge -->
            <div class="p-4 border-t border-slate-800 m-4 rounded-xl bg-slate-950/60 text-xs space-y-2">
                <div class="flex items-center justify-between text-slate-400 font-mono">
                    <span>Engine Status</span>
                    <span class="text-emerald-400 font-bold flex items-center">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse mr-1"></span> Online
                    </span>
                </div>
                <div class="text-[11px] text-slate-400">
                    Laravel v{{ app()->version() }} &bull; PHP {{ PHP_VERSION }}
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden bg-slate-50">
            
            <!-- Top Command Header -->
            <header class="flex justify-between items-center py-3.5 px-6 bg-white border-b border-slate-200 shadow-sm">
                <div class="flex items-center space-x-4">
                    <button @click="sidebarOpen = true" class="text-slate-600 hover:text-slate-900 focus:outline-none lg:hidden p-2 rounded-xl bg-slate-100">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    
                    <div>
                        <h1 class="text-lg font-bold font-display text-slate-900">
                            @yield('header', 'Executive Command Center')
                        </h1>
                        <span class="text-[11px] font-medium text-slate-500 hidden sm:block">Webyotic High-Performance Infrastructure Management</span>
                    </div>
                </div>

                <div class="flex items-center space-x-3">
                    <!-- Quick View Website Button -->
                    <a href="{{ route('home') }}" target="_blank" class="hidden sm:inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-xs font-semibold text-slate-700 border border-slate-200 transition-colors">
                        <svg class="w-3.5 h-3.5 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        <span>View Live Site</span>
                    </a>

                    <!-- User Pill Dropdown -->
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center space-x-2.5 p-1.5 pr-3 rounded-xl bg-slate-100 hover:bg-slate-200 border border-slate-200 transition-colors">
                            <img class="h-7 w-7 rounded-lg object-cover ring-1 ring-slate-300" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=2563eb&color=fff" alt="Avatar">
                            <span class="text-xs font-bold text-slate-800 hidden md:inline">{{ Auth::user()->name ?? 'Administrator' }}</span>
                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-20" style="display: none;"></div>

                        <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-52 rounded-2xl bg-white border border-slate-200 shadow-xl py-2 z-30 space-y-1" style="display: none;">
                            <div class="px-4 py-2 border-b border-slate-100">
                                <p class="text-xs font-bold text-slate-900">{{ Auth::user()->name ?? 'Admin' }}</p>
                                <p class="text-[11px] text-slate-500 truncate">{{ Auth::user()->email ?? 'admin@webyotic.com' }}</p>
                            </div>

                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-xs font-medium text-slate-700 hover:text-brand-600 hover:bg-slate-50">
                                Edit Profile &amp; Security
                            </a>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-xs font-medium text-rose-600 hover:bg-rose-50">
                                    Sign Out Securely
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Working Canvas -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 lg:p-8 bg-slate-50">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 border-l-4 border-l-emerald-500 shadow-sm flex items-center justify-between text-emerald-800 text-xs sm:text-sm font-medium">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="mb-6 p-4 rounded-xl bg-rose-50 border border-rose-200 border-l-4 border-l-rose-500 shadow-sm flex items-center justify-between text-rose-800 text-xs sm:text-sm font-medium">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
    
    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    @stack('scripts')
</body>
</html>
