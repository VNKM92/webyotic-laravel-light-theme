@extends('layouts.admin')

@section('header')
    Edit Ad Unit
@endsection

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.ads.index') }}" class="inline-flex items-center space-x-2 text-xs font-semibold text-brand-600 hover:text-brand-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            <span>Back to Ad Units</span>
        </a>
    </div>

    <form action="{{ route('admin.ads.update', $ad->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="border-b border-slate-200 pb-4">
                <h3 class="text-lg font-bold text-slate-900 flex items-center space-x-2">
                    <span class="w-2 h-2 rounded-full bg-brand-600"></span>
                    <span>Edit Ad Unit Configuration</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Ad Unit Name <span class="text-rose-500">*</span></label>
                    <input type="text" name="name" value="{{ $ad->name }}" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all" required>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Display Location</label>
                    <select name="location" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all">
                        <option value="header_top" {{ $ad->location == 'header_top' ? 'selected' : '' }}>Header Top</option>
                        <option value="sidebar" {{ $ad->location == 'sidebar' ? 'selected' : '' }}>Sidebar</option>
                        <option value="footer_top" {{ $ad->location == 'footer_top' ? 'selected' : '' }}>Footer Top</option>
                        <option value="post_top" {{ $ad->location == 'post_top' ? 'selected' : '' }}>Post Top (Below Title)</option>
                        <option value="post_middle" {{ $ad->location == 'post_middle' ? 'selected' : '' }}>Post Middle</option>
                        <option value="post_bottom" {{ $ad->location == 'post_bottom' ? 'selected' : '' }}>Post Bottom</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Ad Code / HTML / Script <span class="text-rose-500">*</span></label>
                    <textarea name="code" rows="6" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 font-mono text-xs focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all" required>{{ $ad->code }}</textarea>
                </div>

                <div class="flex items-center space-x-3 pt-2">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ $ad->is_active ? 'checked' : '' }} class="w-5 h-5 rounded border-slate-300 text-brand-600 focus:ring-brand-500">
                    <label for="is_active" class="text-xs font-semibold text-slate-900 cursor-pointer">
                        Active &amp; Serving Impressions
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-end space-x-4 pt-4 border-t border-slate-200">
                <a href="{{ route('admin.ads.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold border border-slate-200 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold shadow-sm transition-all">
                    Update Ad Unit
                </button>
            </div>
        </div>
    </form>

</div>
@endsection
