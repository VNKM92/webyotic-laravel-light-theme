@extends('frontend.layouts.app')

@section('content')

@if(isset($page) && !empty($page->content))
<section class="py-8 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 prose max-w-none text-slate-700">
        {!! $page->content !!}
    </div>
</section>
@endif

<!-- Gallery Hero Section -->
<section class="relative pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden bg-gradient-to-b from-blue-50/50 via-white to-white">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-blue-200/40 via-cyan-100/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-20 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-blue-100/40 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100 font-mono shadow-sm">
            Proven Commercial Impact
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-slate-900 tracking-tight max-w-4xl mx-auto leading-tight">
            Engineering <span class="text-blue-600">Showcase &amp; Case Studies</span>.
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-3xl mx-auto font-normal leading-relaxed">
            Explore our curated catalog of production web applications, enterprise dashboards, high-converting platforms, and scalable cloud architectures.
        </p>
    </div>
</section>

<!-- Interactive Portfolio Grid with Reactive Filtering -->
<section class="py-16 border-t border-slate-100 bg-slate-50/60" x-data="{ 
    selectedCategory: 'all',
    searchQuery: '',
    selectedProject: null
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter Controls Bar -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
            <!-- Category Pills -->
            <div class="flex flex-wrap items-center gap-2">
                <button type="button" @click="selectedCategory = 'all'" 
                        :class="selectedCategory === 'all' ? 'bg-blue-600 text-white font-bold shadow-md shadow-blue-500/20' : 'bg-white text-slate-700 hover:bg-slate-50 border border-slate-200/90'" 
                        class="px-5 py-2.5 rounded-full text-xs font-semibold transition-all">
                    All Case Studies ({{ $projects->count() }})
                </button>
                @foreach($categories as $category)
                <button type="button" @click="selectedCategory = '{{ strtolower($category) }}'" 
                        :class="selectedCategory === '{{ strtolower($category) }}' ? 'bg-blue-600 text-white font-bold shadow-md shadow-blue-500/20' : 'bg-white text-slate-700 hover:bg-slate-50 border border-slate-200/90'" 
                        class="px-5 py-2.5 rounded-full text-xs font-semibold transition-all">
                    {{ $category }}
                </button>
                @endforeach
            </div>

            <!-- Search Input -->
            <div class="relative w-full md:w-72">
                <input type="text" x-model="searchQuery" placeholder="Search by title or tech..." 
                       class="w-full bg-white border border-slate-200 text-slate-900 placeholder-slate-400 rounded-full pl-10 pr-4 py-2.5 text-xs focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-colors shadow-sm">
                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>
        </div>

        <!-- Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            @php
                $cat = strtolower($project->category ?? 'other');
                $tagsArr = is_array($project->tags) ? $project->tags : (json_decode($project->tags, true) ?? []);
                $tagsText = strtolower(implode(' ', $tagsArr));
                $titleText = strtolower($project->title);
            @endphp
            <div x-show="(selectedCategory === 'all' || selectedCategory === '{{ $cat }}') && (searchQuery === '' || '{{ $titleText }} {{ $tagsText }}'.includes(searchQuery.toLowerCase()))" 
                 x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 scale-95" 
                 x-transition:enter-end="opacity-100 scale-100" 
                 class="group rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 flex flex-col justify-between">
                <div>
                    <!-- Image Showcase -->
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img loading="lazy" src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold bg-white/90 backdrop-blur-md text-blue-700 border border-slate-200 shadow-sm">
                            {{ $project->category ?? 'Case Study' }}
                        </span>

                        @if(!empty($project->link) && $project->link !== '#')
                        <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer" class="absolute top-4 right-4 p-2 rounded-full bg-white/90 backdrop-blur-md text-slate-700 hover:text-blue-600 border border-slate-200 shadow-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="p-6 sm:p-7 space-y-3">
                        <h3 class="font-display font-bold text-xl text-slate-900 group-hover:text-blue-600 transition-colors">
                            {{ $project->title }}
                        </h3>

                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed line-clamp-3">
                            {{ $project->description }}
                        </p>

                        <!-- Tech Tags -->
                        @if(!empty($tagsArr))
                        <div class="flex flex-wrap gap-1.5 pt-2">
                            @foreach($tagsArr as $tag)
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-semibold text-blue-700 bg-blue-50 border border-blue-100">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>

                <div class="p-6 pt-0 border-t border-slate-100 mt-4 flex items-center justify-between text-xs">
                    <span class="text-emerald-600 font-semibold flex items-center space-x-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Delivered to Production</span>
                    </span>
                    <a href="{{ route('home') }}#consultation" class="text-blue-600 hover:text-blue-700 font-bold flex items-center space-x-1">
                        <span>Build Similar</span>
                        <span>&rarr;</span>
                    </a>
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
                <h2 class="font-display font-black text-3xl sm:text-4xl text-white">Have a Complex Enterprise Application in Mind?</h2>
                <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto">Let's discuss architecture requirements, expected traffic, and engineering sprints.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center space-x-2 px-8 py-3.5 rounded-full font-bold text-sm text-white bg-blue-600 hover:bg-blue-500 shadow-lg shadow-blue-600/30 transition-all hover:scale-105">
                        <span>Schedule Engineering Review</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
