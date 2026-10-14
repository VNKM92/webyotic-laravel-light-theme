@extends('frontend.layouts.app')

@section('content')

@if(!empty($page?->content))
<section class="py-8 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 prose max-w-none text-slate-700">
        {!! $page->content !!}
    </div>
</section>
@endif

<!-- About Hero Section -->
<section class="relative pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden bg-gradient-to-b from-blue-50/50 via-white to-white">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-blue-200/40 via-cyan-100/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-20 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-blue-100/40 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100 font-mono shadow-sm">
            Architecting Digital Solutions
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-slate-900 tracking-tight max-w-4xl mx-auto leading-tight">
            Engineering <span class="text-blue-600">Mission-Critical Apps</span> &amp; Digital Growth.
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-3xl mx-auto font-normal leading-relaxed">
            Webyotic is a modern digital engineering and product studio where technical craftsmanship meets user-focused design and data-driven growth.
        </p>
    </div>
</section>

<!-- Founders & Origin Story Section -->
<section class="py-20 border-t border-slate-100 bg-slate-50/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Story Copy (7 cols) -->
            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 font-mono">Founders &bull; Vision &bull; Heritage</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                    Founded on the Synthesis of Deep Code and High Growth
                </h2>
                
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed">
                    Webyotic was established by two partners: <strong class="text-slate-900 font-semibold">Vinay</strong>, a senior Software Architect with an obsession for resilient, sub-second backend systems and scalable cloud infrastructure; and <strong class="text-slate-900 font-semibold">Shivam</strong>, a creative strategist specializing in conversion design, brand identity, and user acquisition.
                </p>

                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Frustrated by agencies that delivered slow, cookie-cutter templates with zero engineering rigor, Vinay and Shivam set out to create a modern agency standard: zero technical debt, sub-100ms response times, enterprise security protocols, and measurable digital ROI.
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-4">
                    <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm">
                        <div class="font-display font-black text-3xl text-blue-600">250+</div>
                        <div class="text-xs text-slate-500 mt-1 font-semibold">Projects Deployed</div>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm">
                        <div class="font-display font-black text-3xl text-emerald-600">99.98%</div>
                        <div class="text-xs text-slate-500 mt-1 font-semibold">Uptime Track Record</div>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm col-span-2 sm:col-span-1">
                        <div class="font-display font-black text-3xl text-indigo-600">98.7%</div>
                        <div class="text-xs text-slate-500 mt-1 font-semibold">Client Retention</div>
                    </div>
                </div>
            </div>

            <!-- Founders Showcase (5 cols) -->
            <div class="lg:col-span-5 relative">
                <div class="rounded-3xl bg-white border border-slate-200 p-7 space-y-6 shadow-xl shadow-slate-200/50">
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4 p-4 rounded-2xl bg-blue-50/50 border border-blue-100/80">
                            <div class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center font-display font-black text-xl flex-shrink-0 shadow-md shadow-blue-500/20">
                                V
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-base">Vinay</h4>
                                <p class="text-xs text-blue-600 font-semibold uppercase tracking-wide">Head of Engineering &amp; Architecture</p>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">Specializes in Laravel 12 core, high-concurrency microservices, database tuning, and cloud DevOps.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 p-4 rounded-2xl bg-purple-50/50 border border-purple-100/80">
                            <div class="w-12 h-12 rounded-xl bg-purple-600 text-white flex items-center justify-center font-display font-black text-xl flex-shrink-0 shadow-md shadow-purple-500/20">
                                S
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-base">Shivam</h4>
                                <p class="text-xs text-purple-600 font-semibold uppercase tracking-wide">Chief Creative &amp; Growth Strategist</p>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">Specializes in enterprise UI/UX systems, brand identity, programmatic SEO, and user acquisition.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-medium flex items-center space-x-3">
                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span>Verified Leadership: Every project is personally overseen by both founders.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Core Engineering Principles -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100 font-mono">
                Our Non-Negotiables
            </span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-slate-900 tracking-tight">
                Architectural Principles That Govern Every Line of Code
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-2xl bg-white border border-slate-200/90 p-8 space-y-4 shadow-sm hover:shadow-xl hover:border-blue-300 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900">Sub-Second Velocity</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                    We eliminate sluggish assets, bloated scripts, and unindexed database queries. Our applications load within 100-200ms, rivaling top Next.js and static web experiences.
                </p>
            </div>

            <div class="rounded-2xl bg-white border border-slate-200/90 p-8 space-y-4 shadow-sm hover:shadow-xl hover:border-indigo-300 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900">Zero-Compromise Security</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                    CSRF protection, input sanitization, encrypted environment secrets, role-based access control, and adherence to OWASP Top 10 standards are ingrained in our core DNA.
                </p>
            </div>

            <div class="rounded-2xl bg-white border border-slate-200/90 p-8 space-y-4 shadow-sm hover:shadow-xl hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900">Commercial Conversion</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                    Clean software means nothing if it doesn't convert users into revenue. We engineer every customer journey with psychological clarity, fast forms, and data instrumentation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Company Milestones Timeline -->
<section class="py-24 border-t border-slate-100 bg-slate-50/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-50 border border-amber-100 font-mono">
                Track Record
            </span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                Our Evolution Over the Years
            </h2>
        </div>

        <div class="max-w-3xl mx-auto space-y-8 relative before:absolute before:inset-0 before:left-5 before:w-0.5 before:bg-slate-200">
            <div class="relative flex items-start space-x-6">
                <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold text-xs flex items-center justify-center flex-shrink-0 z-10 shadow-md shadow-blue-500/20">
                    2023
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-200/90 flex-1 space-y-1 shadow-sm">
                    <h4 class="font-bold text-slate-900 text-base">The Founding of Webyotic</h4>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">Vinay &amp; Shivam combined senior engineering and digital marketing to build bespoke web solutions for global enterprises.</p>
                </div>
            </div>

            <div class="relative flex items-start space-x-6">
                <div class="w-10 h-10 rounded-full bg-indigo-600 text-white font-bold text-xs flex items-center justify-center flex-shrink-0 z-10 shadow-md shadow-indigo-500/20">
                    2024
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-200/90 flex-1 space-y-1 shadow-sm">
                    <h4 class="font-bold text-slate-900 text-base">Expansion into Microservices &amp; Cloud DevOps</h4>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">Scaled operations to handle high-traffic SaaS products, automated AWS CI/CD pipelines, and multi-tenant architectures.</p>
                </div>
            </div>

            <div class="relative flex items-start space-x-6">
                <div class="w-10 h-10 rounded-full bg-emerald-600 text-white font-bold text-xs flex items-center justify-center flex-shrink-0 z-10 shadow-md shadow-emerald-500/20">
                    2025-26
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-200/90 flex-1 space-y-1 shadow-sm">
                    <h4 class="font-bold text-slate-900 text-base">Autonomous AI Systems &amp; Modern Laravel Architecture</h4>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">Integrated LLM agent pipelines, semantic search engines, and enterprise dashboard platforms across 250+ production deployments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-20 bg-white border-t border-slate-100 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-[#031539] via-[#092257] to-[#041942] rounded-3xl p-10 sm:p-14 text-white shadow-xl relative overflow-hidden">
            <div class="relative z-10 space-y-6">
                <h2 class="font-display font-black text-3xl sm:text-4xl text-white">Partner with Vinay &amp; Shivam on Your Next Initiative</h2>
                <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto">Direct senior architect access. No middle management. Only high-velocity execution.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center space-x-2 px-8 py-3.5 rounded-full font-bold text-sm text-white bg-blue-600 hover:bg-blue-500 shadow-lg shadow-blue-600/30 transition-all hover:scale-105">
                        <span>Initiate Dialogue</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
