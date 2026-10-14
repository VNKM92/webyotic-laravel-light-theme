@extends('frontend.layouts.app')

@section('content')
{{-- 
@if(isset($sliders) && $sliders->isNotEmpty())
    @include('frontend.partials.hero-slider')
@endif --}}

{{-- 1. HERO SECTION --}}
<section class="relative pt-12 pb-20 lg:pt-16 lg:pb-28 overflow-hidden bg-gradient-to-b from-blue-50/40 via-white to-white">
    <!-- Ambient Background Radial Accents -->
    <div class="absolute top-0 right-0 w-[650px] h-[650px] bg-gradient-to-bl from-blue-200/40 via-cyan-100/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-28 left-0 w-[450px] h-[450px] bg-gradient-to-tr from-blue-100/40 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copy & Actions (7 cols on desktop) -->
            <div class="lg:col-span-6 xl:col-span-7 space-y-6 text-left">
                
                <!-- Eyebrow Badge -->
                <div class="inline-flex items-center space-x-2">
                    <span class="text-xs font-extrabold tracking-wider text-blue-600 uppercase font-mono">
                        {{ $siteSettings['home_hero_badge'] ?? 'DIGITAL SOLUTIONS FOR A BRIGHTER TOMORROW' }}
                    </span>
                </div>

                <!-- Main Headline -->
                <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-[56px] xl:text-[62px] tracking-tight text-slate-900 leading-[1.08]">
                    @php
                        $fullTitle = $siteSettings['home_hero_title'] ?? 'We build apps people love.';
                        $highlight = $siteSettings['home_hero_highlight'] ?? 'people love.';
                    @endphp
                    @if(!empty($highlight) && str_contains($fullTitle, $highlight))
                        {!! str_replace($highlight, '<span class="text-blue-600">' . e($highlight) . '</span>', e($fullTitle)) !!}
                    @else
                        {{ $fullTitle }}
                    @endif
                </h1>

                <!-- Subtitle Description -->
                <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-xl">
                    {{ $siteSettings['home_hero_subtitle'] ?? 'From strategy and design to development and growth, Webyotic helps businesses turn ideas into powerful digital products that create real impact.' }}
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <!-- Primary Blue CTA -->
                    <a href="#consultation" class="inline-flex items-center space-x-2 px-7 py-3.5 rounded-full bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm shadow-md shadow-blue-500/25 hover:shadow-blue-500/35 transition-all hover:scale-[1.02] active:scale-[0.98]">
                        <span>Let's Talk About Your Idea</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>

                    <!-- Secondary Explore Our Work CTA -->
                    <a href="#work" class="inline-flex items-center space-x-2 px-6 py-3.5 rounded-full bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 font-semibold text-sm shadow-sm transition-all hover:border-slate-300">
                        <span class="w-5 h-5 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-[9px] font-bold">
                            <svg class="w-3 h-3 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </span>
                        <span>Explore Our Work</span>
                    </a>
                </div>

                <!-- 4 Key Stats Row -->
                <div class="pt-8 border-t border-slate-100 grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <!-- Stat 1 -->
                    <div class="flex items-center space-x-2.5">
                        <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <div class="font-display font-extrabold text-lg text-slate-900 leading-tight">
                                {{ $siteSettings['stat_projects'] ?? '100+' }}
                            </div>
                            <div class="text-[11px] text-slate-500 font-medium">
                                {{ $siteSettings['stat_projects_label'] ?? 'Projects Delivered' }}
                            </div>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="flex items-center space-x-2.5">
                        <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <div class="font-display font-extrabold text-lg text-slate-900 leading-tight">
                                {{ $siteSettings['stat_clients'] ?? '50+' }}
                            </div>
                            <div class="text-[11px] text-slate-500 font-medium">
                                {{ $siteSettings['stat_clients_label'] ?? 'Happy Clients' }}
                            </div>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="flex items-center space-x-2.5">
                        <div class="w-8 h-8 rounded-full bg-teal-50 text-teal-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <div class="font-display font-extrabold text-lg text-slate-900 leading-tight">
                                {{ $siteSettings['stat_experience'] ?? '5+' }}
                            </div>
                            <div class="text-[11px] text-slate-500 font-medium">
                                {{ $siteSettings['stat_experience_label'] ?? 'Years Experience' }}
                            </div>
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="flex items-center space-x-2.5">
                        <div class="w-8 h-8 rounded-full bg-amber-50 text-amber-500 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <div>
                            <div class="font-display font-extrabold text-lg text-slate-900 leading-tight">
                                {{ $siteSettings['stat_rating'] ?? '4.9/5' }}
                            </div>
                            <div class="text-[11px] text-slate-500 font-medium">
                                {{ $siteSettings['stat_rating_label'] ?? 'Client Satisfaction' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: 3D Laptop & Mobile Product Mockup Showcase (5 cols on desktop) -->
            <div class="lg:col-span-6 xl:col-span-5 relative flex items-center justify-center">
                
                <!-- Main Container for Floating 3D Composite Mockup -->
                <div class="relative w-full max-w-[520px] aspect-[4/3] flex items-center justify-center">

                    <!-- Ambient Soft 3D Glow Behind Laptop -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-400/20 via-indigo-300/20 to-cyan-300/20 rounded-3xl blur-2xl -z-10"></div>

                    <!-- Floating Metric Badge 1: Increase Business Growth (+78%) -->
                    <div class="absolute -top-4 left-2 sm:left-4 z-30 bg-white/95 backdrop-blur-md rounded-2xl p-3.5 shadow-xl shadow-slate-300/40 border border-slate-100 flex items-center space-x-3 animate-float">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-tight">Increase Your Business Growth</span>
                            <span class="font-display font-extrabold text-lg text-emerald-600 flex items-center space-x-1">
                                <span>+78%</span>
                                <svg class="w-4 h-4 ml-1 inline text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            </span>
                        </div>
                        <!-- Mini Bar Graph -->
                        <div class="flex items-end space-x-1 h-7">
                            <div class="w-1.5 bg-blue-200 rounded-t h-3"></div>
                            <div class="w-1.5 bg-blue-300 rounded-t h-4"></div>
                            <div class="w-1.5 bg-blue-400 rounded-t h-5"></div>
                            <div class="w-1.5 bg-blue-600 rounded-t h-7"></div>
                        </div>
                    </div>

                    <!-- 3D Realistic Laptop Device Body -->
                    <div class="relative w-[360px] sm:w-[420px] bg-slate-900 rounded-2xl shadow-2xl shadow-slate-400/50 p-2.5 border-[3px] border-slate-700 transform -rotate-1 hover:rotate-0 transition-transform duration-500">
                        <!-- Laptop Web Camera & Top Bezel -->
                        <div class="flex items-center justify-center pb-1.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-700"></div>
                        </div>

                        <!-- Laptop Screen (Dashboard Interface) -->
                        <div class="bg-slate-950 rounded-xl overflow-hidden border border-slate-800 text-left p-4 space-y-3 font-sans">
                            <!-- Dashboard Header -->
                            <div class="flex items-center justify-between border-b border-slate-800/80 pb-2.5">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-rose-500"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-amber-500"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-emerald-500"></div>
                                    <span class="text-[10px] text-slate-400 ml-2 font-mono">webyotic.app/analytics</span>
                                </div>
                                <span class="text-[9px] px-2 py-0.5 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20 font-semibold">Live Analytics</span>
                            </div>

                            <!-- Greeting & Stats Row -->
                            <div>
                                <h4 class="text-xs font-bold text-white flex items-center">
                                    Good Morning, Vinay <span class="ml-1 text-sm">👋</span>
                                </h4>
                                <p class="text-[9px] text-slate-400">Here is your digital growth performance today.</p>
                            </div>

                            <!-- 3 Mini Metric Cards -->
                            <div class="grid grid-cols-3 gap-2">
                                <div class="bg-slate-900/90 rounded-lg p-2 border border-slate-800">
                                    <div class="text-[8px] text-slate-400">Total Users</div>
                                    <div class="text-[11px] font-bold text-white">12,840</div>
                                    <div class="text-[8px] text-emerald-400 font-semibold">+15%</div>
                                </div>
                                <div class="bg-slate-900/90 rounded-lg p-2 border border-slate-800">
                                    <div class="text-[8px] text-slate-400">Revenue</div>
                                    <div class="text-[11px] font-bold text-white">&#8377;8,46,000</div>
                                    <div class="text-[8px] text-emerald-400 font-semibold">+18%</div>
                                </div>
                                <div class="bg-slate-900/90 rounded-lg p-2 border border-slate-800">
                                    <div class="text-[8px] text-slate-400">Active Projects</div>
                                    <div class="text-[11px] font-bold text-white">24</div>
                                    <div class="text-[8px] text-blue-400 font-semibold">+3</div>
                                </div>
                            </div>

                            <!-- Growth Chart Simulation (SVG curve) -->
                            <div class="bg-slate-900/80 rounded-lg p-2.5 border border-slate-800">
                                <div class="flex items-center justify-between text-[9px] text-slate-400 mb-1">
                                    <span class="font-semibold text-slate-300">Growth Overview</span>
                                    <span class="text-blue-400 text-[8px] font-bold">View Report</span>
                                </div>
                                <svg class="w-full h-12" viewBox="0 0 200 50" fill="none" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="chartGrad" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.5"/>
                                            <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.0"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M0 45 C30 35, 60 40, 90 25 C120 10, 150 20, 200 5 L200 50 L0 50 Z" fill="url(#chartGrad)"/>
                                    <path d="M0 45 C30 35, 60 40, 90 25 C120 10, 150 20, 200 5" stroke="#3B82F6" stroke-width="2.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Laptop Base Notch -->
                        <div class="w-24 h-1.5 bg-slate-600 rounded-full mx-auto mt-1.5"></div>
                    </div>

                    <!-- Floating Mobile Phone Mockup (Front-right overlap) -->
                    <div class="absolute -right-2 sm:-right-4 -bottom-6 sm:-bottom-8 z-20 w-[140px] sm:w-[165px] bg-slate-900 rounded-[28px] p-2 shadow-2xl shadow-blue-900/40 border-[3px] border-slate-700 transform rotate-2 hover:rotate-0 transition-transform duration-300">
                        <!-- Dynamic Island Notch -->
                        <div class="w-10 h-2 bg-slate-950 rounded-full mx-auto mb-2"></div>
                        
                        <!-- Screen Content -->
                        <div class="bg-slate-950 rounded-[20px] p-2.5 text-left space-y-2 border border-slate-800">
                            <div class="text-[9px] font-bold text-white leading-tight">Find Your Perfect Solution</div>
                            
                            <!-- Category Buttons -->
                            <div class="space-y-1">
                                <div class="px-2 py-1 rounded-md bg-blue-600 text-white text-[8px] font-semibold flex items-center justify-between">
                                    <span>Web Apps</span>
                                    <span>→</span>
                                </div>
                                <div class="px-2 py-1 rounded-md bg-slate-900 text-slate-300 text-[8px] font-medium flex items-center justify-between">
                                    <span>Mobile Apps</span>
                                    <span>→</span>
                                </div>
                                <div class="px-2 py-1 rounded-md bg-slate-900 text-slate-300 text-[8px] font-medium flex items-center justify-between">
                                    <span>UI/UX Design</span>
                                    <span>→</span>
                                </div>
                                <div class="px-2 py-1 rounded-md bg-slate-900 text-slate-300 text-[8px] font-medium flex items-center justify-between">
                                    <span>Digital Marketing</span>
                                    <span>→</span>
                                </div>
                            </div>

                            <a href="#consultation" class="block text-center py-1 rounded-md bg-blue-600 text-white text-[8px] font-bold shadow-sm">
                                Get Started →
                            </a>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Modern Digital Solutions (Bottom-left avatar stack) -->
                    <div class="absolute -bottom-4 left-4 sm:left-6 z-30 bg-white/95 backdrop-blur-md rounded-2xl p-3 shadow-xl shadow-slate-300/40 border border-slate-100 flex items-center space-x-3 animate-float-delayed">
                        <div class="flex -space-x-2">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Avatar">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="Avatar">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" alt="Avatar">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt="Avatar">
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-[10px] font-extrabold text-slate-900 leading-tight">Modern Digital Solutions</span>
                            <span class="text-[9px] text-slate-500">Trusted by 50+ Brands</span>
                        </div>
                    </div>

                    <!-- Subtle 3D Geometric Cube Decor -->
                    <div class="absolute -top-6 -right-4 w-12 h-12 rounded-xl bg-gradient-to-tr from-cyan-400 to-blue-500 opacity-20 transform rotate-45 blur-sm pointer-events-none"></div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 2. TRUSTED BY BUSINESSES WORLDWIDE LOGOS BAR --}}
<section class="py-12 bg-white border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-8">
            TRUSTED BY BUSINESSES WORLDWIDE
        </h3>
        <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 md:gap-14 opacity-75 grayscale hover:grayscale-0 transition-all duration-300">
            <!-- Stripe -->
            <div class="flex items-center space-x-1 font-bold text-slate-700 text-lg hover:text-[#635BFF] transition-colors">
                <span class="font-extrabold text-xl">stripe</span>
            </div>
            <!-- Slack -->
            <div class="flex items-center space-x-1.5 font-bold text-slate-700 text-base hover:text-[#4A154B] transition-colors">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z"/></svg>
                <span>slack</span>
            </div>
            <!-- AWS -->
            <div class="flex items-center space-x-1 font-bold text-slate-700 text-base hover:text-[#FF9900] transition-colors">
                <span class="tracking-widest font-black">aws</span>
            </div>
            <!-- Google Cloud -->
            <div class="flex items-center space-x-1.5 font-bold text-slate-700 text-sm hover:text-[#4285F4] transition-colors">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z"/></svg>
                <span>Google Cloud</span>
            </div>
            <!-- Laravel -->
            <div class="flex items-center space-x-1.5 font-bold text-slate-700 text-sm hover:text-[#FF2D20] transition-colors">
                <svg class="w-4 h-4 fill-current text-rose-500" viewBox="0 0 24 24"><path d="M21.6 4.8l-8.4-4.8c-.8-.4-1.6-.4-2.4 0L2.4 4.8C1.6 5.2 1 6.1 1 7.1v9.8c0 1 .6 1.9 1.4 2.3l8.4 4.8c.4.2.8.3 1.2.3.4 0 .8-.1 1.2-.3l8.4-4.8c.8-.4 1.4-1.3 1.4-2.3V7.1c0-1-.6-1.9-1.4-2.3z"/></svg>
                <span>Laravel</span>
            </div>
            <!-- React -->
            <div class="flex items-center space-x-1.5 font-bold text-slate-700 text-sm hover:text-[#61DAFB] transition-colors">
                <svg class="w-4 h-4 text-cyan-400 fill-current" viewBox="0 0 24 24"><path d="M12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0-7c-5 0-9 4-9 9 0 2.2.8 4.2 2.1 5.8L3 21l4.2-2.1C8.8 20.2 10.8 21 12 21c5 0 9-4 9-9s-4-9-9-9z"/></svg>
                <span>React</span>
            </div>
            <!-- Vue.js -->
            <div class="flex items-center space-x-1 font-bold text-slate-700 text-sm hover:text-[#42B883] transition-colors">
                <span>Vue.js</span>
            </div>
            <!-- Next.js -->
            <div class="flex items-center space-x-1 font-bold text-slate-700 text-sm hover:text-black transition-colors">
                <span class="font-black tracking-tight">NEXT.JS</span>
            </div>
            <!-- Node.js -->
            <div class="flex items-center space-x-1 font-bold text-slate-700 text-sm hover:text-[#339933] transition-colors">
                <span>node.js</span>
            </div>
            <!-- Figma -->
            <div class="flex items-center space-x-1 font-bold text-slate-700 text-sm hover:text-[#F24E1E] transition-colors">
                <span>Figma</span>
            </div>
        </div>
    </div>
</section>

{{-- 3. ABOUT US SECTION ("Who We Are & Architectural Leadership") --}}
<section id="about" class="py-20 lg:py-28 bg-gradient-to-b from-white via-slate-50/50 to-white relative overflow-hidden border-b border-slate-100" x-data="{ activeTab: 'story' }">
    <!-- Ambient Radial Glow Effects -->
    <div class="absolute top-1/4 -left-48 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-10 -right-48 w-96 h-96 bg-cyan-400/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header Row -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 sm:mb-16 gap-6">
            <div class="max-w-2xl">
                <!-- Eyebrow Badge with Pulse Indicator -->
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-700 text-xs font-bold uppercase tracking-wider font-mono mb-3">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>ABOUT WEBYOTIC &bull; WHO WE ARE</span>
                </div>
                <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-slate-900 tracking-tight leading-[1.15]">
                    Crafting <span class="text-blue-600">High-Performance Code</span> &amp; Search Authority.
                </h2>
                <p class="text-slate-600 text-base sm:text-lg mt-3 leading-relaxed">
                    We bridge deep software engineering with programmatic search engine optimization — turning bold business ideas into fast, secure, and Google-dominating digital platforms.
                </p>
            </div>

            <!-- Quick Navigation to Dedicated About Page -->
            <div>
                <a href="{{ route('about') }}" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-white hover:bg-slate-50 border border-slate-200 text-slate-800 text-xs sm:text-sm font-bold shadow-sm hover:border-blue-400 hover:text-blue-600 transition-all group">
                    <span>Our Full Origin Story</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

        <!-- Main Content Grid: Left Tabs & Copy, Right 3D Visual Command Center -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">
            
            <!-- Left Column: Interactive Tabbed Narrative (7 cols) -->
            <div class="lg:col-span-7 space-y-8">
                
                <!-- Dynamic Pill Tab Switcher -->
                <div class="inline-flex p-1.5 rounded-2xl bg-slate-100/90 border border-slate-200/80 max-w-full overflow-x-auto">
                    <button type="button" 
                            @click="activeTab = 'story'" 
                            :class="activeTab === 'story' ? 'bg-white text-blue-600 shadow-sm font-bold' : 'text-slate-600 hover:text-slate-900 font-semibold'"
                            class="px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all flex items-center space-x-2 whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        <span>Our Story &amp; Purpose</span>
                    </button>

                    <button type="button" 
                            @click="activeTab = 'leadership'" 
                            :class="activeTab === 'leadership' ? 'bg-white text-blue-600 shadow-sm font-bold' : 'text-slate-600 hover:text-slate-900 font-semibold'"
                            class="px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all flex items-center space-x-2 whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        <span>Founders &amp; Leadership</span>
                    </button>

                    <button type="button" 
                            @click="activeTab = 'philosophy'" 
                            :class="activeTab === 'philosophy' ? 'bg-white text-blue-600 shadow-sm font-bold' : 'text-slate-600 hover:text-slate-900 font-semibold'"
                            class="px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all flex items-center space-x-2 whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span>The Webyotic Standard</span>
                    </button>
                </div>

                <!-- Tab 1: Story Content -->
                <div x-show="activeTab === 'story'" x-transition:enter="transition ease-out duration-300 transform opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-5">
                    <h3 class="font-display font-extrabold text-2xl text-slate-900">
                        Founded to Eliminate Slow, Fragile Agency Templates
                    </h3>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Webyotic was established with a singular, uncompromising mission: to challenge traditional agencies that ship sluggish, cookie-cutter CMS templates with bloated plugins and zero architectural rigor.
                    </p>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Headquartered in Ludhiana, Punjab and deploying platforms globally across the US, UK, Europe, Australia, and India, we build custom full-stack web platforms, high-speed mobile apps, and programmatic SEO systems that turn visitors into verified revenue.
                    </p>

                    <!-- Feature Checklist -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-2">
                        <div class="flex items-start space-x-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-slate-800">250+ Production Systems Deployed</span>
                        </div>
                        <div class="flex items-start space-x-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-slate-800">Sub-120ms Server TTFB Speed</span>
                        </div>
                        <div class="flex items-start space-x-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-slate-800">Zero Third-Party Plugin Bloat</span>
                        </div>
                        <div class="flex items-start space-x-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs sm:text-sm font-semibold text-slate-800">100/100 Core Web Vitals Standard</span>
                        </div>
                    </div>
                </div>

                <!-- Tab 2: Leadership Content -->
                <div x-show="activeTab === 'leadership'" x-transition:enter="transition ease-out duration-300 transform opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-5" style="display: none;">
                    <h3 class="font-display font-extrabold text-2xl text-slate-900">
                        Senior Architects on Every Single Project
                    </h3>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Unlike agencies that pitch you senior partners and delegate your build to unvetted junior interns, every line of code and growth funnel at Webyotic is directly overseen by co-founders <strong class="text-slate-900">Vinay</strong> and <strong class="text-slate-900">Shivam</strong>.
                    </p>

                    <!-- Founder Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
                        <div class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-sm hover:border-blue-300 transition-colors">
                            <div class="flex items-center space-x-3 mb-2.5">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-bold text-base flex items-center justify-center shadow-md shadow-blue-500/20">
                                    V
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Vinay</h4>
                                    <p class="text-[11px] text-blue-600 font-semibold uppercase tracking-wider">Head of Engineering &amp; Architecture</p>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 leading-relaxed">
                                Specialist in Laravel 12 core, high-concurrency microservices, MySQL database indexing, and cloud DevOps infrastructure.
                            </p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-sm hover:border-purple-300 transition-colors">
                            <div class="flex items-center space-x-3 mb-2.5">
                                <div class="w-10 h-10 rounded-xl bg-purple-600 text-white font-bold text-base flex items-center justify-center shadow-md shadow-purple-500/20">
                                    S
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Shivam</h4>
                                    <p class="text-[11px] text-purple-600 font-semibold uppercase tracking-wider">Chief Creative &amp; Growth Strategist</p>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 leading-relaxed">
                                Specialist in enterprise UI/UX systems, brand identity, programmatic SEO architecture, and conversion rate optimization.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tab 3: Philosophy Content -->
                <div x-show="activeTab === 'philosophy'" x-transition:enter="transition ease-out duration-300 transform opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-5" style="display: none;">
                    <h3 class="font-display font-extrabold text-2xl text-slate-900">
                        The 3 Non-Negotiable Webyotic Principles
                    </h3>
                    <div class="space-y-3 pt-1">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 flex items-start space-x-3.5">
                            <span class="px-2.5 py-1 rounded-md bg-blue-100 text-blue-700 font-mono text-xs font-bold">01</span>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Sub-Second Velocity Everywhere</h4>
                                <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">We optimize every query and asset so your pages load in under 120ms, boosting Google SERP rankings and user engagement.</p>
                            </div>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 flex items-start space-x-3.5">
                            <span class="px-2.5 py-1 rounded-md bg-indigo-100 text-indigo-700 font-mono text-xs font-bold">02</span>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Zero Technical Debt &amp; OWASP Hardening</h4>
                                <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">No quick hacks. We write clean, self-documenting code with comprehensive sanitization and CSRF protection.</p>
                            </div>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 flex items-start space-x-3.5">
                            <span class="px-2.5 py-1 rounded-md bg-emerald-100 text-emerald-700 font-mono text-xs font-bold">03</span>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Programmatic Search Dominance</h4>
                                <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Structured data, deep entity schema graphs, and database-generated landing pages built to conquer high-intent Google rankings.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Button Row -->
                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm shadow-md shadow-blue-500/20 hover:shadow-blue-500/30 transition-all hover:scale-[1.02]">
                        <span>Read Our Full Story</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="#consultation" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs sm:text-sm transition-colors">
                        <span>Book 15-Min Consultation</span>
                    </a>
                </div>

            </div>

            <!-- Right Column: Interactive 3D Architecture Command Center (5 cols) -->
            <div class="lg:col-span-5 relative flex items-center justify-center">
                
                <!-- Ambient Backdrop Aura -->
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/15 via-indigo-500/10 to-teal-400/15 rounded-3xl blur-2xl -z-10"></div>

                <!-- Floating Micro Badge 1 (Top Left): Founders Direct -->
                <div class="absolute -top-5 -left-3 sm:-left-6 z-20 bg-white/95 backdrop-blur-md rounded-2xl p-3 shadow-xl border border-slate-100 flex items-center space-x-2.5 animate-float">
                    <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <div class="text-[10px] uppercase font-bold text-slate-400">Direct Access</div>
                        <div class="text-xs font-black text-slate-900">Founders Oversee 100%</div>
                    </div>
                </div>

                <!-- Main Glassmorphic Showcase Box -->
                <div class="w-full bg-slate-900 rounded-3xl p-6 sm:p-7 border border-slate-800 shadow-2xl text-white space-y-6 relative overflow-hidden group">
                    
                    <!-- Decorative Background Mesh Grid -->
                    <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:16px_16px] opacity-40 pointer-events-none"></div>

                    <!-- Header Status Strip -->
                    <div class="relative z-10 flex items-center justify-between border-b border-slate-800 pb-4">
                        <div class="flex items-center space-x-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span class="text-xs font-mono font-semibold text-slate-300">Webyotic Engine v3.8</span>
                        </div>
                        <span class="px-2.5 py-0.5 rounded-full bg-blue-500/20 text-blue-400 text-[10px] font-mono font-bold border border-blue-500/30">
                            100% PRODUCTION READY
                        </span>
                    </div>

                    <!-- Google Lighthouse Perfect 100 Gauge -->
                    <div class="relative z-10 p-4 rounded-2xl bg-slate-950/70 border border-slate-800 space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-slate-300 uppercase tracking-wider font-mono">Google Lighthouse Benchmark</span>
                            <span class="text-[10px] text-emerald-400 font-bold bg-emerald-500/10 px-2 py-0.5 rounded-full border border-emerald-500/20">PERFECT SCORE</span>
                        </div>
                        
                        <!-- 4 Circular Badges -->
                        <div class="grid grid-cols-4 gap-2 text-center pt-1">
                            <div class="p-2 rounded-xl bg-slate-900/90 border border-slate-800/80">
                                <div class="font-display font-black text-lg text-emerald-400">100</div>
                                <div class="text-[9px] text-slate-400 font-medium">Performance</div>
                            </div>
                            <div class="p-2 rounded-xl bg-slate-900/90 border border-slate-800/80">
                                <div class="font-display font-black text-lg text-emerald-400">100</div>
                                <div class="text-[9px] text-slate-400 font-medium">Accessibility</div>
                            </div>
                            <div class="p-2 rounded-xl bg-slate-900/90 border border-slate-800/80">
                                <div class="font-display font-black text-lg text-emerald-400">100</div>
                                <div class="text-[9px] text-slate-400 font-medium">Best Practices</div>
                            </div>
                            <div class="p-2 rounded-xl bg-slate-900/90 border border-slate-800/80">
                                <div class="font-display font-black text-lg text-emerald-400">100</div>
                                <div class="text-[9px] text-slate-400 font-medium">SEO Score</div>
                            </div>
                        </div>
                    </div>

                    <!-- Simulated Terminal Output -->
                    <div class="relative z-10 p-3.5 rounded-xl bg-slate-950 border border-slate-800 font-mono text-[11px] space-y-1.5 text-slate-400 leading-relaxed">
                        <div class="flex items-center text-slate-500 text-[10px] pb-1 border-b border-slate-900">
                            <span class="text-emerald-400 mr-2">●</span> terminal &mdash; webyotic-cli
                        </div>
                        <p class="text-blue-400">$ php artisan webyotic:audit --strict</p>
                        <p class="text-slate-300">&check; TTFB Latency: <span class="text-emerald-400 font-bold">118ms</span> (Global Edge)</p>
                        <p class="text-slate-300">&check; Security Grade: <span class="text-emerald-400 font-bold">A+ OWASP Compliant</span></p>
                        <p class="text-slate-300">&check; Core Web Vitals: <span class="text-emerald-400 font-bold">LCP 0.8s &bull; CLS 0.00</span></p>
                    </div>

                    <!-- Tech Stack Badges -->
                    <div class="relative z-10 pt-1">
                        <div class="text-[10px] uppercase font-bold text-slate-400 font-mono mb-2">Core Engineering Stack</div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800 text-blue-300 text-[10px] font-semibold">Laravel 12</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800 text-white text-[10px] font-semibold">Next.js 15</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800 text-teal-300 text-[10px] font-semibold">Tailwind CSS</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800 text-emerald-300 text-[10px] font-semibold">PostgreSQL</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800 text-purple-300 text-[10px] font-semibold">Programmatic SEO</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800 text-amber-300 text-[10px] font-semibold">Redis Cache</span>
                        </div>
                    </div>

                </div>

                <!-- Floating Micro Badge 2 (Bottom Right): Verified Global Deployments -->
                <div class="absolute -bottom-5 -right-3 sm:-right-5 z-20 bg-white/95 backdrop-blur-md rounded-2xl p-3 shadow-xl border border-slate-100 flex items-center space-x-2.5 animate-float-delayed">
                    <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <div class="text-[10px] uppercase font-bold text-slate-400">Global Reach</div>
                        <div class="text-xs font-black text-slate-900">250+ Deployed Apps</div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

{{-- 4. OUR SERVICES SECTION ("End-to-End Digital Solutions") --}}
<section class="py-20 lg:py-24 bg-[#F8FBFE]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header Row -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 sm:mb-14 gap-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 block mb-2 font-mono sm:font-sans">OUR SERVICES</span>
                <h2 class="font-display font-black text-3xl sm:text-4xl text-slate-900 tracking-tight">
                    End-to-End <span class="text-blue-600">Digital Solutions</span>
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 max-w-xl">
                    We offer a complete range of services to help you build, launch and grow your digital presence.
                </p>
            </div>
            <div>
                <a href="{{ route('services') }}" class="inline-flex items-center space-x-2 px-5 py-2.5 rounded-lg border border-blue-500 text-blue-600 hover:bg-blue-600 hover:text-white text-xs sm:text-sm font-semibold transition-all group">
                    <span>View All Services</span>
                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

        <!-- 6 Services Grid (3 cols on desktop) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
            @php
                $defaultServices = [
                    [
                        'title' => 'Strategy & Planning',
                        'short_description' => 'Turn your idea into a clear roadmap with market research and strategy.',
                        'slug' => 'strategy-and-planning',
                        'type' => 'strategy',
                    ],
                    [
                        'title' => 'Brand Design',
                        'short_description' => 'Create a strong brand identity that builds trust and stands out.',
                        'slug' => 'brand-design',
                        'type' => 'brand',
                    ],
                    [
                        'title' => 'UX/UI Design',
                        'short_description' => 'User-focused designs that deliver beautiful and seamless experiences.',
                        'slug' => 'ux-ui-design',
                        'type' => 'ux',
                    ],
                    [
                        'title' => 'App Development',
                        'short_description' => 'High-performance web and mobile applications built for scale.',
                        'slug' => 'app-development',
                        'type' => 'app',
                    ],
                    [
                        'title' => 'Marketing & Growth',
                        'short_description' => 'Data-driven marketing to attract, engage and grow your audience.',
                        'slug' => 'marketing-and-growth',
                        'type' => 'marketing',
                    ],
                    [
                        'title' => 'Conversion Optimization',
                        'short_description' => 'Turn more visitors into customers with proven conversion strategies.',
                        'slug' => 'conversion-optimization',
                        'type' => 'conversion',
                    ],
                ];

                $displayServices = (isset($services) && $services->isNotEmpty()) ? $services : collect($defaultServices);
            @endphp

            @foreach($displayServices as $srv)
                @php
                    $title = is_array($srv) ? $srv['title'] : $srv->title;
                    $desc = is_array($srv) ? ($srv['short_description'] ?? '') : ($srv->short_description ?? $srv->description ?? '');
                    $slug = is_array($srv) ? ($srv['slug'] ?? '') : ($srv->slug ?? '');
                    $iconName = is_array($srv) ? ($srv['type'] ?? '') : ($srv->icon ?? '');
                    
                    $tLower = strtolower($title . ' ' . $iconName);

                    if (str_contains($tLower, 'brand') || str_contains($tLower, 'palette')) {
                        $cardType = 'brand';
                        $iconBg = 'bg-purple-50 text-purple-600';
                    } elseif (str_contains($tLower, 'ux') || str_contains($tLower, 'ui') || str_contains($tLower, 'window')) {
                        $cardType = 'ux';
                        $iconBg = 'bg-sky-50 text-blue-600';
                    } elseif (str_contains($tLower, 'app') || str_contains($tLower, 'dev') || str_contains($tLower, 'code')) {
                        $cardType = 'app';
                        $iconBg = 'bg-blue-50 text-blue-600';
                    } elseif (str_contains($tLower, 'market') || str_contains($tLower, 'growth') || str_contains($tLower, 'chart')) {
                        $cardType = 'marketing';
                        $iconBg = 'bg-orange-50 text-orange-500';
                    } elseif (str_contains($tLower, 'conver') || str_contains($tLower, 'optimi') || str_contains($tLower, 'rocket')) {
                        $cardType = 'conversion';
                        $iconBg = 'bg-teal-50 text-teal-600';
                    } else {
                        $cardType = 'strategy';
                        $iconBg = 'bg-blue-50 text-blue-600';
                    }
                @endphp
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 hover:border-blue-400 hover:shadow-lg hover:shadow-blue-500/5 transition-all duration-300 group flex items-start space-x-4 sm:space-x-5 h-full">
                    
                    <!-- Left: Icon Box -->
                    <div class="w-14 h-14 sm:w-16 sm:h-16 flex-shrink-0 rounded-2xl {{ $iconBg }} flex items-center justify-center transition-transform group-hover:scale-105 duration-200">
                        @if($cardType === 'strategy')
                            {{-- Lightbulb (Strategy & Planning) --}}
                            <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M9 18h6m-4 3h2M12 2a7 7 0 0 0-7 7c0 2.6 1.6 4.8 3.5 5.8V17a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-2.2c1.9-1 3.5-3.2 3.5-5.8a7 7 0 0 0-7-7z"/>
                            </svg>
                        @elseif($cardType === 'brand')
                            {{-- Artist Palette (Brand Design) --}}
                            <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.8 8.9 8.7 9 1.1 0 2-.9 2-2 0-.5-.2-1-.5-1.4-.3-.4-.5-.9-.5-1.4 0-1.1.9-2 2-2h1.8c4.1 0 7.5-3.4 7.5-7.5C23 6.3 18 2 12 2z"/>
                                <circle cx="7.5" cy="10.5" r="1.25" fill="currentColor"/>
                                <circle cx="11" cy="7" r="1.25" fill="currentColor"/>
                                <circle cx="15.5" cy="7.5" r="1.25" fill="currentColor"/>
                                <circle cx="18" cy="11.5" r="1.25" fill="currentColor"/>
                            </svg>
                        @elseif($cardType === 'ux')
                            {{-- Browser UI Screen (UX/UI Design) --}}
                            <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="16" rx="3"/>
                                <line x1="3" y1="9" x2="21" y2="9"/>
                                <circle cx="6" cy="6.5" r="0.75" fill="currentColor"/>
                                <circle cx="8.5" cy="6.5" r="0.75" fill="currentColor"/>
                                <rect x="8" y="12.5" width="8" height="4.5" rx="1" stroke-width="1.8"/>
                            </svg>
                        @elseif($cardType === 'app')
                            {{-- Code Brackets </> (App Development) --}}
                            <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <polyline points="16 18 22 12 16 6"/>
                                <polyline points="8 6 2 12 8 18"/>
                                <line x1="14" y1="4" x2="10" y2="20"/>
                            </svg>
                        @elseif($cardType === 'marketing')
                            {{-- Ascending Bar Chart (Marketing & Growth) --}}
                            <svg class="w-7 h-7 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="3" y="15" width="3.2" height="7" rx="1.6"/>
                                <rect x="8.5" y="10.5" width="3.2" height="11.5" rx="1.6"/>
                                <rect x="14" y="6" width="3.2" height="16" rx="1.6"/>
                                <rect x="19.5" y="2" width="3.2" height="20" rx="1.6"/>
                            </svg>
                        @elseif($cardType === 'conversion')
                            {{-- Rocket (Conversion Optimization) --}}
                            <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
                                <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
                                <circle cx="15.5" cy="8.5" r="1.5" fill="currentColor"/>
                                <path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2.5 5-2.5"/>
                                <path d="M12 15v5s3.03-.55 4.5-2c1.63-1.62 2.5-5 2.5-5"/>
                            </svg>
                        @endif
                    </div>

                    <!-- Right: Content -->
                    <div class="flex-1 min-w-0">
                        <h3 class="font-display font-bold text-base sm:text-lg text-slate-900 group-hover:text-blue-600 transition-colors leading-snug">
                            {{ $title }}
                        </h3>

                        <p class="text-xs sm:text-[13px] text-slate-500 leading-relaxed mt-1.5 line-clamp-2 sm:line-clamp-3">
                            {{ $desc }}
                        </p>

                        <div class="mt-3.5">
                            <a href="{{ route('services') }}#{{ $slug }}" class="inline-flex items-center space-x-1.5 text-xs sm:text-[13px] font-semibold text-blue-600 hover:text-blue-700 transition-all group/link">
                                <span>Learn More</span>
                                <svg class="w-3.5 h-3.5 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 4. FEATURED PROJECTS ("Our Latest Work") --}}
<section id="work" class="py-20 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Row -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 block mb-2">FEATURED PROJECTS</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                    Our Latest Work
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 max-w-xl">
                    Take a look at some of our recent projects. Real ideas. Real results.
                </p>
            </div>
            <div>
                <a href="{{ route('gallery') }}" class="inline-flex items-center space-x-2 px-5 py-2.5 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-xs sm:text-sm font-semibold transition-all group">
                    <span>View All Projects</span>
                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

        <!-- 3 Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects->take(3) as $proj)
                <div class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-xl hover:border-blue-300 transition-all duration-300 group flex flex-col justify-between">
                    <!-- Project Preview Mockup / Visual Container -->
                    <div class="relative bg-slate-900 p-4 sm:p-5 h-56 sm:h-64 flex items-center justify-center overflow-hidden">
                        <!-- Background Glow -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/40 to-slate-900"></div>

                        <!-- Device Presentation / Preview -->
                        <div class="relative z-10 w-full h-full flex items-center justify-center">
                            <!-- Desktop Mockup Frame -->
                            <div class="w-[85%] h-[85%] bg-slate-950 rounded-lg overflow-hidden border border-slate-700/80 shadow-2xl relative transform group-hover:scale-105 transition-transform duration-500">
                                <img src="{{ $proj->image }}" alt="{{ $proj->title }}" class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity">
                            </div>

                            <!-- Overlapping Mobile Phone Mockup -->
                            <div class="absolute -right-1 -bottom-2 w-20 h-32 bg-slate-950 rounded-xl p-1 border-2 border-slate-700 shadow-2xl transform rotate-3 group-hover:rotate-0 transition-transform duration-500 hidden sm:block">
                                <div class="w-full h-full rounded-lg overflow-hidden bg-slate-900">
                                    <img src="{{ $proj->image }}" alt="Mobile screen" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                        <div>
                            <!-- Tags Row -->
                            <div class="flex flex-wrap items-center gap-1.5 mb-3">
                                @if(!empty($proj->tags) && is_array($proj->tags))
                                    @foreach($proj->tags as $t)
                                        <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-blue-50 text-blue-700">
                                            {{ $t }}
                                        </span>
                                    @endforeach
                                @elseif(!empty($proj->category))
                                    <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-blue-50 text-blue-700">
                                        {{ $proj->category }}
                                    </span>
                                @else
                                    <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-blue-50 text-blue-700">Web App</span>
                                    <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-indigo-50 text-indigo-700">SaaS</span>
                                @endif
                            </div>

                            <!-- Title -->
                            <h3 class="font-display font-bold text-lg text-slate-900 group-hover:text-blue-600 transition-colors">
                                {{ $proj->title }}
                            </h3>

                            <!-- Description -->
                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mt-2 line-clamp-2">
                                {{ $proj->description }}
                            </p>
                        </div>

                        <!-- Link -->
                        <div class="mt-6 pt-4 border-t border-slate-100">
                            <a href="{{ route('gallery') }}" class="inline-flex items-center space-x-1.5 text-xs font-bold text-blue-600 group-hover:text-blue-700 group-hover:translate-x-0.5 transition-all">
                                <span>View Case Study</span>
                                <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-8 text-slate-500">No projects to display.</div>
            @endforelse
        </div>
    </div>
</section>

{{-- 6. SEARCH ENGINE DOMINANCE & TECHNICAL SEO ARCHITECTURE ("Why We Rank #1 on Google") --}}
<section id="seo-engine" class="py-20 lg:py-28 bg-[#070D1E] text-white relative overflow-hidden">
    <!-- Ambient Sci-Fi Glow & Grids -->
    <div class="absolute top-0 right-0 w-[550px] h-[550px] bg-blue-600/15 rounded-full blur-3xl pointer-events-none -z-0"></div>
    <div class="absolute bottom-0 left-0 w-[550px] h-[550px] bg-cyan-500/10 rounded-full blur-3xl pointer-events-none -z-0"></div>
    <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-cyan-400 bg-cyan-950/60 border border-cyan-500/30 font-mono shadow-sm">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                <span>GOOGLE RANKING ENGINE &bull; PROGRAMMATIC SEO &bull; CORE WEB VITALS</span>
            </span>

            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight leading-tight">
                Engineered to Rank #1 on Google &mdash; <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-indigo-400">Not Just Look Good.</span>
            </h2>

            <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                Most web agencies build slow, cookie-cutter templates with bloated plugins that fail Google Core Web Vitals and get buried on page 5. Webyotic engineers programmatic search infrastructure, sub-120ms TTFB, semantic JSON-LD entity graphs, and conversion-optimized architectures that dominate Google rankings.
            </p>
        </div>

        <!-- 1. The High-Contrast Comparison Matrix: Traditional Agencies vs. Webyotic Engineering -->
        <div class="mb-16">
            <div class="bg-slate-900/90 rounded-3xl border border-slate-800 shadow-2xl overflow-hidden backdrop-blur-sm">
                <div class="p-6 sm:p-8 border-b border-slate-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h3 class="font-display font-extrabold text-xl text-white">
                            Traditional Web Agency vs. Webyotic High-Performance Engineering
                        </h3>
                        <p class="text-xs text-slate-400 mt-1">
                            Why 90% of business websites fail to rank on Google while Webyotic platforms capture #1 search results.
                        </p>
                    </div>
                    <div class="flex items-center space-x-4 text-xs font-mono">
                        <span class="flex items-center text-rose-400"><span class="w-2 h-2 rounded-full bg-rose-500 mr-1.5"></span> Generic Agency</span>
                        <span class="flex items-center text-emerald-400"><span class="w-2 h-2 rounded-full bg-emerald-500 mr-1.5"></span> Webyotic Architecture</span>
                    </div>
                </div>

                <!-- Comparison Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs sm:text-sm">
                        <thead>
                            <tr class="border-b border-slate-800/80 bg-slate-950/60 text-slate-400 uppercase text-[10px] font-mono tracking-wider">
                                <th class="py-4 px-6 font-bold">SEO &amp; Engineering Dimension</th>
                                <th class="py-4 px-6 font-bold text-rose-400">Traditional Agency (WordPress / Templates)</th>
                                <th class="py-4 px-6 font-bold text-cyan-400 bg-blue-950/30">Webyotic Custom Software Engine</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60 text-slate-300">
                            <!-- Row 1: Page Speed & TTFB -->
                            <tr class="hover:bg-slate-800/30 transition-colors">
                                <td class="py-4 px-6 font-semibold text-white flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                    <span>Server Speed &amp; TTFB Latency</span>
                                </td>
                                <td class="py-4 px-6 text-slate-400">
                                    <span class="text-rose-400 font-semibold">3.5s &ndash; 6.2s</span> &bull; Sluggish shared hosting, unoptimized database queries, slow TTFB.
                                </td>
                                <td class="py-4 px-6 bg-blue-950/20 font-medium text-emerald-300">
                                    <span class="text-emerald-400 font-bold">&lt;120ms Instant TTFB</span> &bull; Redis micro-caching, PHP 8.3 OPcache &amp; global edge CDN.
                                </td>
                            </tr>

                            <!-- Row 2: Core Web Vitals -->
                            <tr class="hover:bg-slate-800/30 transition-colors">
                                <td class="py-4 px-6 font-semibold text-white flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span>Google Core Web Vitals (LCP / CLS)</span>
                                </td>
                                <td class="py-4 px-6 text-slate-400">
                                    <span class="text-rose-400 font-semibold">Fails CWV Audit</span> &bull; High layout shifts, bloated CSS/JS chunks blocking main thread.
                                </td>
                                <td class="py-4 px-6 bg-blue-950/20 font-medium text-emerald-300">
                                    <span class="text-emerald-400 font-bold">100/100 Pure Green</span> &bull; Zero CLS, sub-second LCP, sub-20ms interaction delay.
                                </td>
                            </tr>

                            <!-- Row 3: Structured Data & Schema Graph -->
                            <tr class="hover:bg-slate-800/30 transition-colors">
                                <td class="py-4 px-6 font-semibold text-white flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                                    <span>Schema.org JSON-LD Knowledge Graph</span>
                                </td>
                                <td class="py-4 px-6 text-slate-400">
                                    <span class="text-rose-400 font-semibold">Basic Title/Meta</span> &bull; Missing semantic schema; ineligible for Google Rich Snippets.
                                </td>
                                <td class="py-4 px-6 bg-blue-950/20 font-medium text-emerald-300">
                                    <span class="text-emerald-400 font-bold">Deep Linked Schema</span> &bull; FAQPage, Organization, Service &amp; Review graphs for SERP badges.
                                </td>
                            </tr>

                            <!-- Row 4: Programmatic Scalability -->
                            <tr class="hover:bg-slate-800/30 transition-colors">
                                <td class="py-4 px-6 font-semibold text-white flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                                    <span>Programmatic Long-Tail Capture</span>
                                </td>
                                <td class="py-4 px-6 text-slate-400">
                                    <span class="text-rose-400 font-semibold">Capped at 20-30 Pages</span> &bull; Manual editing breaks; unable to capture thousands of buyer queries.
                                </td>
                                <td class="py-4 px-6 bg-blue-950/20 font-medium text-emerald-300">
                                    <span class="text-emerald-400 font-bold">1,000+ Automated Landing Pages</span> &bull; Programmatic SEO engine capturing high-intent search traffic.
                                </td>
                            </tr>

                            <!-- Row 5: Security & Technical Debt -->
                            <tr class="hover:bg-slate-800/30 transition-colors">
                                <td class="py-4 px-6 font-semibold text-white flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-teal-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                    <span>Security Rigor &amp; Maintenance</span>
                                </td>
                                <td class="py-4 px-6 text-slate-400">
                                    <span class="text-rose-400 font-semibold">30+ Fragile Plugins</span> &bull; Prone to zero-day vulnerabilities, SQL injection, spam bots.
                                </td>
                                <td class="py-4 px-6 bg-blue-950/20 font-medium text-emerald-300">
                                    <span class="text-emerald-400 font-bold">OWASP Top 10 Hardened</span> &bull; Native CSRF protection, strict input sanitization, zero plugin debt.
                                </td>
                            </tr>

                            <!-- Row 6: Conversion Rate (CRO) -->
                            <tr class="hover:bg-slate-800/30 transition-colors">
                                <td class="py-4 px-6 font-semibold text-white flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-cyan-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>Lead Conversion Rate (CRO)</span>
                                </td>
                                <td class="py-4 px-6 text-slate-400">
                                    <span class="text-rose-400 font-semibold">1.0% &ndash; 1.8% Conversion</span> &bull; Sluggish forms, poor mobile ergonomics, lost customers.
                                </td>
                                <td class="py-4 px-6 bg-blue-950/20 font-medium text-emerald-300">
                                    <span class="text-emerald-400 font-bold">4.8%+ Conversion</span> &bull; Instant link prefetching, frictionless lead forms, psychological UX.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 2. The 4 Strategic Pillars of Google Organic Dominance -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            
            <!-- Pillar 1 -->
            <div class="bg-slate-900/80 rounded-2xl p-6 border border-slate-800 hover:border-cyan-400/50 transition-all duration-300 group hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center font-bold mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h4 class="font-display font-bold text-lg text-white group-hover:text-cyan-400 transition-colors">
                    Technical SEO &amp; Sub-120ms TTFB
                </h4>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    Google algorithm explicitly prioritizes sub-second page delivery. We engineer Brotli compression, WebP/AVIF imagery, and Redis caching for instant crawls.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-800/80 text-[11px] font-mono text-cyan-400 font-semibold">
                    Core Web Vitals 100/100
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="bg-slate-900/80 rounded-2xl p-6 border border-slate-800 hover:border-blue-400/50 transition-all duration-300 group hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h4 class="font-display font-bold text-lg text-white group-hover:text-blue-400 transition-colors">
                    Programmatic SEO Engines
                </h4>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    Capture thousands of high-intent search queries at scale. Database-driven dynamic routes, programmatic metadata, and automated XML sitemaps.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-800/80 text-[11px] font-mono text-blue-400 font-semibold">
                    1,000+ Dynamic Buyer Routes
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="bg-slate-900/80 rounded-2xl p-6 border border-slate-800 hover:border-purple-400/50 transition-all duration-300 group hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center font-bold mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h4 class="font-display font-bold text-lg text-white group-hover:text-purple-400 transition-colors">
                    Semantic Schema &amp; Knowledge Graphs
                </h4>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    We embed nested JSON-LD structured data qualifying your brand for Google Rich Snippets, star ratings, FAQ accordions, and Google AI Overviews.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-800/80 text-[11px] font-mono text-purple-400 font-semibold">
                    Google SERP Rich Badges
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="bg-slate-900/80 rounded-2xl p-6 border border-slate-800 hover:border-emerald-400/50 transition-all duration-300 group hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center font-bold mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="font-display font-bold text-lg text-white group-hover:text-emerald-400 transition-colors">
                    Conversion-Engineered Architecture
                </h4>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    High rankings are worthless if traffic doesn't convert. We design frictionless lead funnels, Next.js hover prefetching, and high-trust buyer journeys.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-800/80 text-[11px] font-mono text-emerald-400 font-semibold">
                    3x Higher Conversion Rate
                </div>
            </div>

        </div>

        <!-- 3. Google SERP Interactive Simulator -->
        <div class="bg-slate-900/70 rounded-3xl p-6 sm:p-8 border border-slate-800">
            <div class="max-w-2xl mx-auto space-y-3">
                <div class="flex items-center justify-between text-xs text-slate-400 border-b border-slate-800 pb-2">
                    <span class="flex items-center space-x-1.5 font-mono text-cyan-400 font-semibold">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 15h-2v-6h2zm0-8h-2V7h2z"/></svg>
                        <span>Live Google SERP Feature Mockup</span>
                    </span>
                    <span class="text-[11px]">Rank #1 Organic Snippet</span>
                </div>

                <!-- Google Result Preview Box -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 text-left shadow-lg space-y-2">
                    <!-- Google URL bar -->
                    <div class="flex items-center space-x-2 text-xs text-slate-600">
                        <div class="w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-[10px]">W</div>
                        <div class="flex flex-col">
                            <span class="text-slate-900 font-bold text-[11px] leading-tight">Webyotic</span>
                            <span class="text-[10px] text-slate-500">https://webyotic.com &gt; services &gt; custom-programming-seo</span>
                        </div>
                    </div>

                    <!-- Headline link -->
                    <h4 class="text-base sm:text-lg font-semibold text-blue-700 hover:underline cursor-pointer">
                        Webyotic | Top SEO &amp; Custom Programming Agency &mdash; Full Stack &amp; Apps
                    </h4>

                    <!-- Star rating badge -->
                    <div class="flex items-center space-x-2 text-xs text-slate-700">
                        <div class="flex text-amber-500 font-bold">&starf;&starf;&starf;&starf;&starf;</div>
                        <span class="font-bold text-slate-900">4.9</span>
                        <span class="text-slate-500">(100+ client reviews)</span>
                        <span class="text-slate-300">&bull;</span>
                        <span class="text-emerald-700 font-semibold bg-emerald-50 px-2 py-0.5 rounded text-[11px]">100% Core Web Vitals</span>
                    </div>

                    <!-- Snippet description -->
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Webyotic is an industry-leading software programming &amp; programmatic SEO agency founded by Vinay &amp; Shivam. Delivering sub-second web applications, mobile apps, and data-driven organic search architectures ranking #1 on Google.
                    </p>

                    <!-- Google Sitelinks -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 pt-2 border-t border-slate-100">
                        <a href="{{ route('services') }}" class="text-[11px] font-semibold text-blue-700 hover:underline">Custom Programming</a>
                        <a href="{{ route('services') }}" class="text-[11px] font-semibold text-blue-700 hover:underline">Programmatic SEO</a>
                        <a href="{{ route('gallery') }}" class="text-[11px] font-semibold text-blue-700 hover:underline">Case Studies (250+)</a>
                        <a href="#consultation" class="text-[11px] font-semibold text-blue-700 hover:underline">Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Structured Data for Search Engine Optimization Agency -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Webyotic - Custom Programming & Programmatic SEO Agency",
      "url": "{{ url('/') }}",
      "priceRange": "$$$",
      "image": "{{ asset('images/logo.png') }}",
      "telephone": "+91 89883 13005",
      "email": "hello@webyotic.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Ludhiana",
        "addressRegion": "Punjab",
        "addressCountry": "IN"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "100"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Digital Engineering & Search Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Programmatic Search Engine Optimization (SEO)",
              "description": "Enterprise database-driven SEO architecture capturing thousands of transactional search queries."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Custom Full-Stack Web Development",
              "description": "High-performance Laravel 12 and Next.js applications with sub-120ms response times."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Core Web Vitals Speed Optimization",
              "description": "Audit and engineering guaranteeing 100/100 Google Lighthouse and Core Web Vitals scores."
            }
          }
        ]
      }
    }
    </script>
</section>

{{-- 7. OUR PROCESS ("A Simple 5-Step Process") --}}
<section class="py-20 lg:py-24 bg-slate-50/70 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Center Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-600 block mb-2">OUR PROCESS</span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                A Simple <span class="text-blue-600">5-Step Process</span>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                From idea to impact — we make the journey simple, transparent and efficient.
            </p>
        </div>

        <!-- 5 Steps Horizontal Timeline -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 relative">
            
            <!-- Step 1: Discover & Strategy -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="relative mb-5">
                    <!-- Step Number Badge -->
                    <span class="absolute -top-1.5 -left-1.5 w-6 h-6 rounded-full bg-blue-600 text-white font-bold text-[11px] flex items-center justify-center shadow-md z-10">1</span>
                    <!-- Icon Circle -->
                    <div class="w-16 h-16 rounded-full bg-blue-500 text-white flex items-center justify-center shadow-lg shadow-blue-500/25 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                </div>
                <h3 class="font-display font-bold text-base text-slate-900 group-hover:text-blue-600 transition-colors">
                    Discover &amp; Strategy
                </h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                    We understand your goals, audience and market.
                </p>
                <!-- Desktop Connector Arrow -->
                <div class="hidden lg:block absolute top-7 -right-4 text-slate-300 font-bold text-lg select-none">
                    →
                </div>
            </div>

            <!-- Step 2: Design -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="relative mb-5">
                    <span class="absolute -top-1.5 -left-1.5 w-6 h-6 rounded-full bg-blue-600 text-white font-bold text-[11px] flex items-center justify-center shadow-md z-10">2</span>
                    <div class="w-16 h-16 rounded-full bg-sky-500 text-white flex items-center justify-center shadow-lg shadow-sky-500/25 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    </div>
                </div>
                <h3 class="font-display font-bold text-base text-slate-900 group-hover:text-blue-600 transition-colors">
                    Design
                </h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                    Create wireframes and stunning UI/UX designs.
                </p>
                <div class="hidden lg:block absolute top-7 -right-4 text-slate-300 font-bold text-lg select-none">
                    →
                </div>
            </div>

            <!-- Step 3: Development -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="relative mb-5">
                    <span class="absolute -top-1.5 -left-1.5 w-6 h-6 rounded-full bg-blue-600 text-white font-bold text-[11px] flex items-center justify-center shadow-md z-10">3</span>
                    <div class="w-16 h-16 rounded-full bg-teal-500 text-white flex items-center justify-center shadow-lg shadow-teal-500/25 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                </div>
                <h3 class="font-display font-bold text-base text-slate-900 group-hover:text-blue-600 transition-colors">
                    Development
                </h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                    Bring your product to life with clean, scalable code.
                </p>
                <div class="hidden lg:block absolute top-7 -right-4 text-slate-300 font-bold text-lg select-none">
                    →
                </div>
            </div>

            <!-- Step 4: Launch -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="relative mb-5">
                    <span class="absolute -top-1.5 -left-1.5 w-6 h-6 rounded-full bg-blue-600 text-white font-bold text-[11px] flex items-center justify-center shadow-md z-10">4</span>
                    <div class="w-16 h-16 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-600/25 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                </div>
                <h3 class="font-display font-bold text-base text-slate-900 group-hover:text-blue-600 transition-colors">
                    Launch
                </h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                    Test, deploy and ensure everything runs smoothly.
                </p>
                <div class="hidden lg:block absolute top-7 -right-4 text-slate-300 font-bold text-lg select-none">
                    →
                </div>
            </div>

            <!-- Step 5: Growth -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="relative mb-5">
                    <span class="absolute -top-1.5 -left-1.5 w-6 h-6 rounded-full bg-blue-600 text-white font-bold text-[11px] flex items-center justify-center shadow-md z-10">5</span>
                    <div class="w-16 h-16 rounded-full bg-emerald-500 text-white flex items-center justify-center shadow-lg shadow-emerald-500/25 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                </div>
                <h3 class="font-display font-bold text-base text-slate-900 group-hover:text-blue-600 transition-colors">
                    Growth
                </h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                    Ongoing support and marketing for long-term success.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 6. CLIENT TESTIMONIALS SECTION ("What Our Clients Say") --}}
<section class="py-20 lg:py-24 bg-white" x-data="{ currentSlide: 0 }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Row with Prev/Next Controls -->
        <div class="flex items-end justify-between mb-14">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 block mb-2">CLIENT TESTIMONIALS</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                    What Our Clients Say
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 max-w-xl">
                    We're proud to work with amazing businesses and help them achieve their goals.
                </p>
            </div>
            
            <!-- Slider Controls -->
            <div class="flex items-center space-x-2">
                <button @click="currentSlide = Math.max(0, currentSlide - 1)" 
                        :class="currentSlide === 0 ? 'opacity-40 cursor-not-allowed' : 'hover:bg-blue-50 text-slate-700'"
                        class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button @click="currentSlide = (currentSlide + 1) % 2" 
                        class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center hover:bg-blue-50 text-slate-700 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <!-- Testimonial Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($testimonials->take(3) as $idx => $testi)
                @php
                    $quoteColors = ['text-pink-500', 'text-blue-500', 'text-purple-500'];
                    $qColor = $quoteColors[$idx % 3];
                @endphp
                <div class="bg-white rounded-2xl p-8 border border-slate-200/90 shadow-sm hover:shadow-xl hover:border-blue-300 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Large Quote Icon -->
                        <div class="text-3xl font-serif {{ $qColor }} mb-3 select-none leading-none">
                            “
                        </div>

                        <!-- Review Quote Content -->
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                            "{{ $testi->content }}"
                        </p>
                    </div>

                    <!-- Client Profile & Rating -->
                    <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <img src="{{ $testi->image ?? 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80' }}" alt="{{ $testi->name }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                            <div>
                                <h4 class="font-display font-bold text-sm text-slate-900 leading-tight">
                                    {{ $testi->name }}
                                </h4>
                                <p class="text-[11px] text-slate-500">
                                    {{ $testi->position }}{{ !empty($testi->company) ? ', ' . $testi->company : '' }}
                                </p>
                            </div>
                        </div>

                        <!-- 5 Gold Stars -->
                        <div class="flex text-amber-400 text-xs">
                            @for($s = 0; $s < ($testi->rating ?? 5); $s++)
                                <span>★</span>
                            @endfor
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-8 text-slate-500">No testimonials to display.</div>
            @endforelse
        </div>
    </div>
</section>

{{-- 7. LATEST INSIGHTS & BLUEPRINTS (SEO Topical Depth) --}}
@if(isset($posts) && $posts->count() > 0)
<section class="py-20 lg:py-24 bg-slate-50/70 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Row -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 block mb-2 font-mono">INDUSTRY BLUEPRINTS &bull; SEO &bull; PROGRAMMING</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                    Latest Insights &amp; Engineering Strategies
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 max-w-xl">
                    Proven playbooks on custom full-stack programming, Google ranking algorithms, Core Web Vitals, and conversion rate optimization.
                </p>
            </div>
            <div>
                <a href="{{ route('blog') }}" class="inline-flex items-center space-x-2 px-5 py-2.5 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-xs sm:text-sm font-semibold transition-all group">
                    <span>Explore All Insights</span>
                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

        <!-- 3 Blog Post Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts->take(3) as $post)
            <article class="group rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 flex flex-col justify-between">
                <div>
                    <!-- Post Image -->
                    <div class="relative h-48 overflow-hidden bg-slate-900">
                        <img loading="lazy" src="{{ $post->image ?? 'https://images.unsplash.com/photo-1499750310159-5b600aaf0320?auto=format&fit=crop&w=800&q=80' }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold bg-white/90 backdrop-blur-md text-blue-700 border border-slate-200 shadow-sm">
                            {{ optional($post->category)->name ?? 'Engineering' }}
                        </span>
                    </div>

                    <!-- Post Body -->
                    <div class="p-6 space-y-3">
                        <div class="flex items-center space-x-2 text-xs text-slate-500 font-medium">
                            <span>{{ $post->created_at?->format('M d, Y') }}</span>
                            <span>&bull;</span>
                            <span>{{ optional($post->user)->name ?? 'Vinay & Shivam' }}</span>
                        </div>

                        <h3 class="font-display font-bold text-lg text-slate-900 group-hover:text-blue-600 transition-colors line-clamp-2">
                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                        </h3>

                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed line-clamp-2">
                            {{ Str::limit(strip_tags($post->body), 130) }}
                        </p>
                    </div>
                </div>

                <div class="p-6 pt-0 border-t border-slate-100 mt-3 flex items-center justify-between text-xs">
                    <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-blue-600 hover:text-blue-700 flex items-center space-x-1.5 transition-colors">
                        <span>Read Blueprint</span>
                        <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <span class="text-slate-400 font-medium text-[11px]">5 min read</span>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- 8. FREQUENTLY ASKED QUESTIONS (Keyword Dominance & Google Rich Snippets) --}}
<section class="py-20 lg:py-24 bg-white" x-data="{ activeFaq: null }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 space-y-4">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100 font-mono shadow-sm">
                Search Engine &amp; Programming Clarity
            </span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                Frequently Asked Questions
            </h2>
            <p class="text-slate-600 text-sm sm:text-base max-w-xl mx-auto">
                Everything you need to know about partnering with Webyotic for software programming, technical SEO, and conversion scaling.
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all">
                <button type="button" @click="activeFaq = (activeFaq === 1 ? null : 1)" class="w-full p-6 text-left flex items-center justify-between font-bold text-slate-900 text-base sm:text-lg hover:text-blue-600 transition-colors">
                    <span>What makes Webyotic different from generic digital marketing &amp; web agencies?</span>
                    <svg class="w-5 h-5 text-blue-600 transition-transform duration-300 flex-shrink-0 ml-4" :class="activeFaq === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="activeFaq === 1" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    Most agencies use low-cost, bloated CMS templates that score poorly on Google Core Web Vitals and lack software engineering rigor. Webyotic bridges full-stack custom programming (Laravel, Next.js, APIs) with programmatic search engine optimization (schema graphs, sub-100ms TTFB, semantic keyword matrices). Every project is personally architected by founders Vinay (Engineering Lead) and Shivam (Growth Lead).
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all">
                <button type="button" @click="activeFaq = (activeFaq === 2 ? null : 2)" class="w-full p-6 text-left flex items-center justify-between font-bold text-slate-900 text-base sm:text-lg hover:text-blue-600 transition-colors">
                    <span>How does programmatic SEO help my business rank #1 on Google?</span>
                    <svg class="w-5 h-5 text-blue-600 transition-transform duration-300 flex-shrink-0 ml-4" :class="activeFaq === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="activeFaq === 2" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    Programmatic SEO creates hundreds or thousands of high-intent, database-generated landing pages optimized for long-tail search intent. Paired with valid JSON-LD structured data and fast server-side rendering, search engines rapidly crawl, index, and rank these pages for buyers ready to convert.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all">
                <button type="button" @click="activeFaq = (activeFaq === 3 ? null : 3)" class="w-full p-6 text-left flex items-center justify-between font-bold text-slate-900 text-base sm:text-lg hover:text-blue-600 transition-colors">
                    <span>Which programming languages and frameworks does Webyotic specialize in?</span>
                    <svg class="w-5 h-5 text-blue-600 transition-transform duration-300 flex-shrink-0 ml-4" :class="activeFaq === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="activeFaq === 3" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    Our core engineering stack comprises Laravel, PHP 8+, Next.js, React, Node.js, Tailwind CSS, PostgreSQL/MySQL, Redis caching, and Flutter for cross-platform mobile apps. We adhere to clean code principles, OWASP Top 10 security protocols, and zero-downtime CI/CD deployment pipelines.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all">
                <button type="button" @click="activeFaq = (activeFaq === 4 ? null : 4)" class="w-full p-6 text-left flex items-center justify-between font-bold text-slate-900 text-base sm:text-lg hover:text-blue-600 transition-colors">
                    <span>How can I schedule a consultation and receive a project estimate?</span>
                    <svg class="w-5 h-5 text-blue-600 transition-transform duration-300 flex-shrink-0 ml-4" :class="activeFaq === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="activeFaq === 4" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    Simply fill out the 15-minute consultation form below or contact us via WhatsApp/email. Our senior architects review your technical requirements and respond with a tailored architectural blueprint and timeline within 24 hours.
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Schema.org FAQPage Structured Data for Google SERP Accordions -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What makes Webyotic different from generic digital marketing & web agencies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Webyotic bridges full-stack custom programming (Laravel, Next.js, APIs) with programmatic search engine optimization (schema graphs, sub-100ms TTFB, semantic keyword matrices). Every project is personally architected by founders Vinay (Engineering Lead) and Shivam (Growth Lead)."
      }
    },
    {
      "@type": "Question",
      "name": "How does programmatic SEO help my business rank #1 on Google?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Programmatic SEO creates hundreds or thousands of high-intent, database-generated landing pages optimized for long-tail search intent. Paired with valid JSON-LD structured data and fast server-side rendering, search engines rapidly crawl, index, and rank these pages."
      }
    },
    {
      "@type": "Question",
      "name": "Which programming languages and frameworks does Webyotic specialize in?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our core engineering stack comprises Laravel, PHP 8+, Next.js, React, Node.js, Tailwind CSS, PostgreSQL/MySQL, Redis caching, and Flutter for cross-platform mobile apps."
      }
    },
    {
      "@type": "Question",
      "name": "How can I schedule a consultation and receive a project estimate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Simply fill out the 15-minute consultation form on our website or contact us via WhatsApp/email. Our senior architects review your technical requirements and respond with a tailored architectural blueprint and timeline within 24 hours."
      }
    }
  ]
}
</script>

{{-- 9. CTA CONSULTATION BANNER ("Get a Free 15-Minute Consultation") --}}
<section id="consultation" class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Deep Navy Rounded Container -->
        <div class="relative bg-gradient-to-r from-[#031539] via-[#092257] to-[#041942] rounded-3xl p-8 sm:p-12 lg:p-14 text-white shadow-2xl overflow-hidden">
            
            <!-- Background Ambient Glow & Mesh -->
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center relative z-10">
                
                <!-- Left Column: Copy -->
                <div class="lg:col-span-5 space-y-4 text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 font-mono block">
                        {{ $siteSettings['cta_badge'] ?? "LET'S BUILD SOMETHING AMAZING" }}
                    </span>
                    
                    <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-[42px] leading-tight text-white tracking-tight">
                        @php
                            $ctaTitle = $siteSettings['cta_title'] ?? 'Get a Free 15-Minute Consultation';
                            $ctaHigh = $siteSettings['cta_highlight'] ?? '15-Minute';
                        @endphp
                        @if(!empty($ctaHigh) && str_contains($ctaTitle, $ctaHigh))
                            {!! str_replace($ctaHigh, '<span class="text-cyan-400">' . e($ctaHigh) . '</span>', e($ctaTitle)) !!}
                        @else
                            {{ $ctaTitle }}
                        @endif
                    </h2>

                    <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-md pt-1">
                        {{ $siteSettings['cta_subtitle'] ?? 'Discuss your idea with our experts and get the right guidance for your project. No obligations, just honest advice.' }}
                    </p>

                    <!-- Trust indicators -->
                    <div class="pt-4 flex items-center space-x-6 text-xs text-slate-300">
                        <div class="flex items-center space-x-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span>Direct Architect Review</span>
                        </div>
                        <div class="flex items-center space-x-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                            <span>NDA Protected</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Consultation Form -->
                <div class="lg:col-span-7 bg-white/5 backdrop-blur-md rounded-2xl p-6 sm:p-8 border border-white/10 shadow-xl">
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        
                        <!-- Honeypot for spam protection -->
                        <input type="text" name="website_honeypot" style="display: none;" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="subject" value="15-Minute Consultation Request">

                        <!-- Row 1: Name & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <input type="text" 
                                       name="name" 
                                       required 
                                       placeholder="Your Name *" 
                                       value="{{ old('name') }}"
                                       class="w-full bg-white text-slate-900 placeholder-slate-400 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            </div>
                            <div>
                                <input type="email" 
                                       name="email" 
                                       required 
                                       placeholder="Your Email *" 
                                       value="{{ old('email') }}"
                                       class="w-full bg-white text-slate-900 placeholder-slate-400 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            </div>
                        </div>

                        <!-- Row 2: Phone & Project Type -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <input type="tel" 
                                       name="phone" 
                                       placeholder="Phone Number" 
                                       value="{{ old('phone') }}"
                                       class="w-full bg-white text-slate-900 placeholder-slate-400 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            </div>
                            <div>
                                <select name="service" 
                                        class="w-full bg-white text-slate-900 placeholder-slate-400 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    <option value="" disabled selected>Project Type</option>
                                    <option value="Web Application">Web Application</option>
                                    <option value="Mobile App">Mobile App</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Brand Identity">Brand Design</option>
                                    <option value="App Development">App Development</option>
                                    <option value="Marketing & Growth">Marketing &amp; Growth</option>
                                    <option value="Conversion Optimization">Conversion Optimization</option>
                                    <option value="Other">Other Custom Solution</option>
                                </select>
                            </div>
                        </div>

                        <!-- Row 3: Message -->
                        <div>
                            <textarea name="message" 
                                      rows="3" 
                                      required 
                                      placeholder="Tell us about your project..." 
                                      class="w-full bg-white text-slate-900 placeholder-slate-400 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ old('message') }}</textarea>
                        </div>

                        <!-- Row 4: Submit Button -->
                        <div>
                            <button type="submit" class="w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-lg shadow-blue-600/30 transition-all flex items-center justify-center space-x-2 active:scale-[0.99]">
                                <span>Book Free Consultation</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
