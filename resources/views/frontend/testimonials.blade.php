@extends('frontend.layouts.app')

@section('content')

@if(isset($page) && !empty($page->content))
<section class="py-8 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 prose max-w-none text-slate-700">
        {!! $page->content !!}
    </div>
</section>
@endif

<!-- Testimonials Hero Section -->
<section class="relative pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden bg-gradient-to-b from-blue-50/50 via-white to-white">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-blue-200/40 via-cyan-100/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-20 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-blue-100/40 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-50 border border-amber-100 font-mono shadow-sm">
            Authentic Social Proof
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-slate-900 tracking-tight max-w-4xl mx-auto leading-tight">
            Trusted by <span class="text-blue-600">Industry Leaders &amp; Founders</span>.
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-3xl mx-auto font-normal leading-relaxed">
            Discover how founders, technical executives, and growth leaders transform their systems and dominate organic pipelines with Webyotic.
        </p>
    </div>
</section>

<!-- Trust Metrics Summary Bar -->
<section class="py-12 border-y border-slate-200/80 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="font-display font-black text-3xl sm:text-4xl text-amber-500">4.9 / 5.0</div>
                <div class="text-xs text-slate-500 mt-1 uppercase font-mono font-semibold">Average Client Rating</div>
            </div>
            <div>
                <div class="font-display font-black text-3xl sm:text-4xl text-emerald-600">98.7%</div>
                <div class="text-xs text-slate-500 mt-1 uppercase font-mono font-semibold">On-Time Delivery Rate</div>
            </div>
            <div>
                <div class="font-display font-black text-3xl sm:text-4xl text-blue-600">250+</div>
                <div class="text-xs text-slate-500 mt-1 uppercase font-mono font-semibold">Global Deployments</div>
            </div>
            <div>
                <div class="font-display font-black text-3xl sm:text-4xl text-indigo-600">68%</div>
                <div class="text-xs text-slate-500 mt-1 uppercase font-mono font-semibold">Avg Latency Cut</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Grid -->
<section class="py-20 bg-slate-50/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="rounded-2xl bg-white border border-slate-200/90 p-8 shadow-sm transition-all duration-300 hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 flex flex-col justify-between">
                <div class="space-y-4">
                    <!-- Rating Stars -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-1 text-amber-400">
                            @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-100">&bull; Verified Client</span>
                    </div>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed italic">
                        &ldquo;{{ $testimonial->content }}&rdquo;
                    </p>
                </div>

                <div class="pt-6 border-t border-slate-100 flex items-center space-x-4 mt-6">
                    <img loading="lazy" src="{{ $testimonial->image ?? 'https://ui-avatars.com/api/?name=' . urlencode($testimonial->name) }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full object-cover border border-slate-200">
                    <div>
                        <h4 class="font-bold text-slate-900 text-base leading-tight">{{ $testimonial->name }}</h4>
                        <p class="text-xs text-slate-500 mt-0.5">{{ $testimonial->position }} &bull; <span class="text-blue-600 font-semibold">{{ $testimonial->company }}</span></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-20 bg-white border-t border-slate-100 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-[#031539] via-[#092257] to-[#041942] rounded-3xl p-10 sm:p-14 text-white shadow-xl relative overflow-hidden">
            <div class="relative z-10 space-y-6">
                <h2 class="font-display font-black text-3xl sm:text-4xl text-white">Join Our Cohort of High-Growth Partners</h2>
                <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto">Discover how your company can achieve unprecedented velocity and organic market dominance.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center space-x-2 px-8 py-3.5 rounded-full font-bold text-sm text-white bg-blue-600 hover:bg-blue-500 shadow-lg shadow-blue-600/30 transition-all hover:scale-105">
                        <span>Initiate Project Discussion</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
