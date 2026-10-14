@extends('frontend.layouts.app')

@section('content')

<!-- Blog Post Hero -->
<section class="relative pt-16 pb-12 overflow-hidden bg-gradient-to-b from-blue-50/50 via-white to-white">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-blue-200/40 via-cyan-100/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-xs text-slate-500 font-medium">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('blog') }}" class="hover:text-blue-600 transition-colors">Insights</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold truncate max-w-xs">{{ $post->title }}</span>
        </nav>

        <!-- Category & Reading Time -->
        <div class="flex items-center space-x-3">
            <span class="px-3 py-1 rounded-full text-xs font-bold text-blue-700 bg-blue-50 border border-blue-100">
                {{ optional($post->category)->name ?? 'Engineering' }}
            </span>
            <span class="text-xs text-slate-500 font-medium">5 min read &bull; {{ $post->created_at?->format('F d, Y') }}</span>
        </div>

        <h1 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-slate-900 tracking-tight leading-tight">
            {{ $post->title }}
        </h1>

        <!-- Author Pill -->
        <div class="flex items-center space-x-3 pt-2">
            <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold font-display shadow-sm">
                {{ substr(optional($post->user)->name ?? 'V', 0, 1) }}
            </div>
            <div>
                <div class="text-xs font-bold text-slate-900">{{ optional($post->user)->name ?? 'Vinay & Shivam' }}</div>
                <div class="text-[11px] text-slate-500 font-medium">Senior Engineering Staff &bull; Webyotic</div>
            </div>
        </div>
    </div>
</section>

<!-- Main Article Body -->
<section class="py-12 border-t border-slate-100 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(!empty($post->image))
        <div class="rounded-2xl overflow-hidden mb-12 border border-slate-200 shadow-sm">
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-auto object-cover max-h-[500px]">
        </div>
        @endif

        <article class="prose prose-slate prose-lg max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:text-slate-900 prose-a:text-blue-600 hover:prose-a:text-blue-700 prose-code:text-blue-700 prose-code:bg-blue-50 prose-code:p-1 prose-code:rounded prose-pre:bg-slate-900 prose-pre:text-slate-100 leading-relaxed text-slate-700">
            {!! $post->body !!}
        </article>

        <!-- Share & Return Footer -->
        <div class="mt-16 pt-8 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
            <a href="{{ route('blog') }}" class="text-xs font-bold text-blue-600 hover:text-blue-700 flex items-center space-x-2 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                <span>BACK TO INSIGHTS</span>
            </a>

            <div class="flex items-center space-x-3">
                <span class="text-xs text-slate-500 font-medium">Share:</span>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="p-2.5 rounded-full bg-slate-100 hover:bg-slate-900 hover:text-white text-slate-600 transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="p-2.5 rounded-full bg-slate-100 hover:bg-blue-600 hover:text-white text-slate-600 transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Related Blueprints -->
@if(!empty($relatedPosts) && $relatedPosts->count())
<section class="py-20 border-t border-slate-100 bg-slate-50/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="font-display font-extrabold text-2xl text-slate-900 mb-8">Related Architectural Insights</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedPosts as $related)
            <div class="rounded-2xl bg-white border border-slate-200/90 p-6 flex flex-col justify-between hover:border-blue-300 hover:shadow-lg transition-all">
                <div class="space-y-3">
                    <span class="text-xs font-bold text-blue-600 uppercase">{{ $related->category->name ?? 'Article' }}</span>
                    <h4 class="font-display font-bold text-lg text-slate-900 hover:text-blue-600 transition-colors line-clamp-2">
                        <a href="{{ route('blog.show', $related->slug) }}">{{ $related->title }}</a>
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-600 line-clamp-2 leading-relaxed">
                        {{ Str::limit(strip_tags($related->body), 100) }}
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-100 mt-4">
                    <a href="{{ route('blog.show', $related->slug) }}" class="text-xs font-bold text-blue-600 hover:text-blue-700 flex items-center space-x-1">
                        <span>Read Blueprint</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
