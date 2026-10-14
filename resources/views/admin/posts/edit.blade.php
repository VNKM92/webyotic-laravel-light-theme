@extends('layouts.admin')

@section('header')
    Edit Engineering Article
@endsection

@section('content')
<div class="max-w-5xl mx-auto space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center space-x-2 text-xs font-semibold text-brand-600 hover:text-brand-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            <span>Back to All Posts</span>
        </a>
    </div>

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Core Content Card -->
        <div class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="border-b border-slate-200 pb-4">
                <h3 class="text-lg font-bold text-slate-900 flex items-center space-x-2">
                    <span class="w-2 h-2 rounded-full bg-brand-600"></span>
                    <span>Article Content</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label for="title" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Article Title <span class="text-rose-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all" required>
                </div>

                <div>
                    <label for="category_id" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Category Vertical</label>
                    <select name="category_id" id="category_id" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                        <option value="">None / General</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="image" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Cover Image URL</label>
                    <input type="text" name="image" id="image" value="{{ $post->image }}" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div class="md:col-span-2">
                    <label for="body" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Article Body Content <span class="text-rose-500">*</span></label>
                    <textarea name="body" id="body" rows="10" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all font-sans leading-relaxed" required>{{ $post->body }}</textarea>
                </div>
            </div>
        </div>

        <!-- SEO Metadata Card -->
        <div class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="border-b border-slate-200 pb-4">
                <h3 class="text-lg font-bold text-slate-900 flex items-center space-x-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span>Search Engine Optimization (SEO)</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="focus_keyword" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Focus Target Keyword</label>
                    <input type="text" name="focus_keyword" id="focus_keyword" value="{{ $post->focus_keyword }}" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div>
                    <label for="seo_title" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Meta Title</label>
                    <input type="text" name="seo_title" id="seo_title" value="{{ $post->seo_title }}" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div class="md:col-span-2">
                    <label for="seo_description" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Meta Description</label>
                    <textarea name="seo_description" id="seo_description" rows="3" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">{{ $post->seo_description }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label for="seo_keywords" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">SEO Keywords (Comma Separated)</label>
                    <input type="text" name="seo_keywords" id="seo_keywords" value="{{ $post->seo_keywords }}" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>
            </div>
        </div>

        <!-- Submit Bar -->
        <div class="flex items-center justify-end space-x-4">
            <a href="{{ route('admin.posts.index') }}" class="px-6 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold border border-slate-200 transition-colors">
                Cancel
            </a>
            <button type="submit" class="px-8 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold shadow-sm transition-all">
                Update Article
            </button>
        </div>
    </form>

</div>
@endsection
