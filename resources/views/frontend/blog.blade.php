@extends('frontend.layouts.app')

@section('content')

@if(isset($page) && !empty($page->content))
<section class="py-8 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 prose max-w-none text-slate-700">
        {!! $page->content !!}
    </div>
</section>
@endif

<!-- Blog Hero Section -->
<section class="relative pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden bg-gradient-to-b from-blue-50/50 via-white to-white">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-blue-200/40 via-cyan-100/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-20 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-blue-100/40 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100 font-mono shadow-sm">
            Insights &bull; Webyotic
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-slate-900 tracking-tight max-w-4xl mx-auto leading-tight">
            Engineering <span class="text-blue-600">Knowledge &amp; Blueprints</span>.
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-3xl mx-auto font-normal leading-relaxed">
            Deep dives into enterprise Laravel architectures, web performance, technical SEO strategies, and modern cloud deployment frameworks.
        </p>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="py-16 border-t border-slate-100 bg-slate-50/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
            <article class="group rounded-2xl bg-white border border-slate-200/90 overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 flex flex-col justify-between">
                <div>
                    <!-- Post Image -->
                    <div class="relative h-52 overflow-hidden bg-slate-900">
                        <img loading="lazy" src="{{ $post->image ?? 'https://images.unsplash.com/photo-1499750310159-5b600aaf0320?auto=format&fit=crop&w=800&q=80' }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold bg-white/90 backdrop-blur-md text-blue-700 border border-slate-200 shadow-sm">
                            {{ optional($post->category)->name ?? 'Engineering' }}
                        </span>
                    </div>

                    <!-- Post Body -->
                    <div class="p-6 sm:p-7 space-y-3">
                        <div class="flex items-center space-x-2 text-xs text-slate-500 font-medium">
                            <span>{{ $post->created_at?->format('M d, Y') }}</span>
                            <span>&bull;</span>
                            <span>{{ optional($post->user)->name ?? 'Vinay & Shivam' }}</span>
                        </div>

                        <h2 class="font-display font-bold text-xl text-slate-900 group-hover:text-blue-600 transition-colors line-clamp-2">
                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>

                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed line-clamp-3">
                            {{ Str::limit(strip_tags($post->body), 160) }}
                        </p>
                    </div>
                </div>

                <div class="p-6 pt-0 border-t border-slate-100 mt-4 flex items-center justify-between text-xs">
                    <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-blue-600 hover:text-blue-700 flex items-center space-x-1.5 transition-colors">
                        <span>READ BLUEPRINT</span>
                        <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <span class="text-slate-400 font-medium text-[11px]">5 min read</span>
                </div>
            </article>
            @empty
            <div class="col-span-3 text-center py-16 text-slate-500">
                Articles will appear here.
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $posts->links() }}
        </div>

    </div>
</section>

@endsection
