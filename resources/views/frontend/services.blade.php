@extends('frontend.layouts.app')

@section('content')

@if(isset($page) && !empty($page->content))
<section class="py-8 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 prose max-w-none text-slate-700">
        {!! $page->content !!}
    </div>
</section>
@endif

<!-- Services Hero Section -->
<section class="relative pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden bg-gradient-to-b from-blue-50/50 via-white to-white">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-blue-200/40 via-cyan-100/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-20 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-blue-100/40 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100 font-mono shadow-sm">
            Full-Spectrum Digital Capabilities
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-slate-900 tracking-tight max-w-4xl mx-auto leading-tight">
            Enterprise Solutions for <span class="text-blue-600">Scale, Speed &amp; Impact</span>.
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-3xl mx-auto font-normal leading-relaxed">
            We engineer resilient web platforms, autonomous AI workflows, conversion-optimized design systems, and aggressive search engine architectures.
        </p>
    </div>
</section>

<!-- Dynamic Services Catalog -->
<section class="py-20 border-t border-slate-100 bg-slate-50/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $index => $service)
            @php
                $colors = [
                    ['bg' => 'bg-blue-50', 'text' => 'text-blue-600', 'border' => 'border-blue-100'],
                    ['bg' => 'bg-purple-50', 'text' => 'text-purple-600', 'border' => 'border-purple-100'],
                    ['bg' => 'bg-sky-50', 'text' => 'text-sky-600', 'border' => 'border-sky-100'],
                    ['bg' => 'bg-indigo-50', 'text' => 'text-indigo-600', 'border' => 'border-indigo-100'],
                    ['bg' => 'bg-amber-50', 'text' => 'text-amber-600', 'border' => 'border-amber-100'],
                    ['bg' => 'bg-teal-50', 'text' => 'text-teal-600', 'border' => 'border-teal-100'],
                ];
                $theme = $colors[$index % 6];
            @endphp
            <div class="group rounded-2xl bg-white border border-slate-200/90 p-8 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 flex flex-col justify-between">
                <div>
                    @if(!empty($service->image))
                    <div class="h-44 rounded-xl overflow-hidden mb-6 bg-slate-100 border border-slate-200">
                        <img loading="lazy" src="{{ $service->image }}" alt="{{ $service->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    @else
                    <div class="w-14 h-14 rounded-2xl {{ $theme['bg'] }} {{ $theme['text'] }} flex items-center justify-center mb-6 font-display font-black text-xl transition-transform group-hover:scale-110 duration-200 shadow-sm">
                        {{ substr($service->title, 0, 1) }}
                    </div>
                    @endif

                    <h3 class="font-display font-bold text-xl sm:text-2xl text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">
                        {{ $service->title }}
                    </h3>

                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                        {{ $service->description ?? $service->short_description }}
                    </p>
                </div>

                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <a href="{{ route('home') }}#consultation" class="text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700 flex items-center space-x-1.5 transition-colors">
                        <span>ESTIMATE SCOPE</span>
                        <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <span class="text-[10px] font-mono text-slate-400 uppercase font-semibold">SLA &bull; 99.98%</span>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Engineering Standards Matrix (Comparison Table) -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100 font-mono">
                The Webyotic Advantage
            </span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                Webyotic Enterprise Standard vs Typical Web Agencies
            </h2>
        </div>

        <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs sm:text-sm">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-slate-700 font-mono text-xs uppercase">
                            <th class="p-6">Architectural Benchmark</th>
                            <th class="p-6 text-blue-600 font-bold bg-blue-50/50">Webyotic Standard</th>
                            <th class="p-6 text-slate-500">Typical Agency / Freelancers</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        <tr>
                            <td class="p-6 font-semibold text-slate-900">Stack Architecture</td>
                            <td class="p-6 text-blue-700 font-medium bg-blue-50/20">Bespoke Laravel + Next.js / Tailwind (Clean Code)</td>
                            <td class="p-6 text-slate-500">Heavy bloated WordPress themes &amp; brittle plugins</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-semibold text-slate-900">Core Web Vitals &amp; PageSpeed</td>
                            <td class="p-6 text-emerald-600 font-bold bg-blue-50/20">95 - 100 Mobile Score (&lt; 200ms latency)</td>
                            <td class="p-6 text-slate-500">30 - 65 Score (3 to 6 second load times)</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-semibold text-slate-900">Security Protocol</td>
                            <td class="p-6 text-blue-700 font-medium bg-blue-50/20">Zero-Trust, CSRF, sanitization, encrypted secrets, strict headers</td>
                            <td class="p-6 text-slate-500">Default settings, vulnerable shared hosting, unpatched scripts</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-semibold text-slate-900">Direct Architect Access</td>
                            <td class="p-6 text-blue-700 font-medium bg-blue-50/20">Direct communication with founders Vinay &amp; Shivam</td>
                            <td class="p-6 text-slate-500">Passed down to junior interns &amp; account handlers</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-semibold text-slate-900">Search Engine Architecture</td>
                            <td class="p-6 text-emerald-600 font-bold bg-blue-50/20">Programmatic SEO, JSON-LD Schema graph, instant indexing</td>
                            <td class="p-6 text-slate-500">Basic meta tag plugins without structured semantic data</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- Interactive Technical FAQs (Alpine.js) -->
<section class="py-24 border-t border-slate-100 bg-slate-50/70" x-data="{ activeFaq: null }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 space-y-4">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-purple-600 bg-purple-50 border border-purple-100 font-mono">
                Technical Inquiries
            </span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                Frequently Asked Architectural Questions
            </h2>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all">
                <button type="button" @click="activeFaq = (activeFaq === 1 ? null : 1)" class="w-full p-6 text-left flex items-center justify-between font-bold text-slate-900 text-base hover:text-blue-600 transition-colors">
                    <span>Why do you recommend modern frameworks like Laravel paired with Tailwind?</span>
                    <svg class="w-5 h-5 text-blue-600 transition-transform duration-300" :class="activeFaq === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="activeFaq === 1" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    Laravel provides unmatched backend security, Eloquent ORM elegance, built-in queue processing, and rock-solid architectural foundations. Paired with lightweight utility Tailwind CSS and instant client prefetching, pages feel instantaneous without bloated bundle sizes.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all">
                <button type="button" @click="activeFaq = (activeFaq === 2 ? null : 2)" class="w-full p-6 text-left flex items-center justify-between font-bold text-slate-900 text-base hover:text-blue-600 transition-colors">
                    <span>Can you integrate custom AI models and automated workflow systems?</span>
                    <svg class="w-5 h-5 text-blue-600 transition-transform duration-300" :class="activeFaq === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="activeFaq === 2" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    Yes. We engineer Retrieval-Augmented Generation (RAG) pipelines, autonomous task workflows, custom OpenAI/Claude integrations, and streaming AI assistant interfaces directly into your enterprise dashboard.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all">
                <button type="button" @click="activeFaq = (activeFaq === 3 ? null : 3)" class="w-full p-6 text-left flex items-center justify-between font-bold text-slate-900 text-base hover:text-blue-600 transition-colors">
                    <span>What is your typical turnaround timeline for an application?</span>
                    <svg class="w-5 h-5 text-blue-600 transition-transform duration-300" :class="activeFaq === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="activeFaq === 3" x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    Most full-scale products ship within 4 to 8 weeks through agile two-week sprint milestones. We provide staging environments, continuous deployment previews, and direct Slack/Discord channels with Vinay &amp; Shivam.
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
                <h2 class="font-display font-black text-3xl sm:text-4xl text-white">Need a Customized Architecture Consultation?</h2>
                <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto">Tell us what you are building and we will architect a turnkey solution for your stack.</p>
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center space-x-2 px-8 py-3.5 rounded-full font-bold text-sm text-white bg-blue-600 hover:bg-blue-500 shadow-lg shadow-blue-600/30 transition-all hover:scale-105">
                        <span>Start Architecture Dialogue</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
