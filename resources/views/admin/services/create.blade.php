@extends('layouts.admin')

@section('header')
    Create Enterprise Service
@endsection

@section('content')
<div class="max-w-5xl mx-auto space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.services.index') }}" class="inline-flex items-center space-x-2 text-xs font-semibold text-brand-600 hover:text-brand-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            <span>Back to All Services</span>
        </a>
    </div>

    <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Core Service Info -->
        <div class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="border-b border-slate-200 pb-4">
                <h3 class="text-lg font-bold text-slate-900 flex items-center space-x-2">
                    <span class="w-2 h-2 rounded-full bg-brand-600"></span>
                    <span>Service Architecture</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Service Title <span class="text-rose-500">*</span></label>
                    <input type="text" name="title" placeholder="e.g. Enterprise Web Applications" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all" required>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Slug (URL Endpoint)</label>
                    <input type="text" name="slug" placeholder="e.g. enterprise-web-apps (or leave empty)" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Icon Class or Name</label>
                    <input type="text" name="icon" placeholder="e.g. fas fa-server, code, shield" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Image URL</label>
                    <input type="text" name="image" placeholder="https://images.unsplash.com/..." class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Executive Summary (Short Description)</label>
                    <textarea name="short_description" rows="3" placeholder="Brief high-impact summary for service cards..." class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all"></textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Full Technical Description</label>
                    <textarea name="description" rows="6" placeholder="Comprehensive service breakdown and deliverables..." class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all"></textarea>
                </div>
            </div>
        </div>

        <!-- SEO Metadata Card -->
        <div class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="border-b border-slate-200 pb-4">
                <h3 class="text-lg font-bold text-slate-900 flex items-center space-x-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                    <span>Search Engine Optimization (SEO)</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Focus Target Keyword</label>
                    <input type="text" name="focus_keyword" placeholder="e.g. enterprise web development" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Meta Title</label>
                    <input type="text" name="seo_title" placeholder="Meta title for Google search..." class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Meta Description</label>
                    <textarea name="seo_description" rows="3" placeholder="Meta description for search snippets..." class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all"></textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">SEO Keywords (Comma Separated)</label>
                    <input type="text" name="seo_keywords" placeholder="web development, laravel, nextjs, software agency" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                </div>
            </div>
        </div>

        <!-- Submit Bar -->
        <div class="flex items-center justify-end space-x-4">
            <a href="{{ route('admin.services.index') }}" class="px-6 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold border border-slate-200 transition-colors">
                Cancel
            </a>
            <button type="submit" class="px-8 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold shadow-sm transition-all transform hover:-translate-y-0.5">
                Save &amp; Publish Service
            </button>
        </div>
    </form>

</div>
@endsection
