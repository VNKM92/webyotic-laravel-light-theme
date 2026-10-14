@extends('layouts.admin')

@section('header')
    Create Category
@endsection

@section('content')
<div class="max-w-3xl mx-auto space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.categories.index') }}" class="inline-flex items-center space-x-2 text-xs font-semibold text-brand-600 hover:text-brand-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            <span>Back to Categories</span>
        </a>
    </div>

    <div class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 space-y-6 shadow-sm">
        <div class="border-b border-slate-200 pb-4">
            <h3 class="text-lg font-bold text-slate-900 flex items-center space-x-2">
                <span class="w-2 h-2 rounded-full bg-brand-600"></span>
                <span>Category Details</span>
            </h3>
            <p class="text-xs text-slate-500 mt-1">Create a new category for articles, publications, or portfolio verticals.</p>
        </div>

        <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Category Name <span class="text-rose-500">*</span></label>
                <input type="text" name="name" id="name" placeholder="e.g. Artificial Intelligence, Cloud Infrastructure" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all" required>
            </div>

            <div class="flex items-center justify-end space-x-4 pt-4 border-t border-slate-200">
                <a href="{{ route('admin.categories.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold border border-slate-200 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold shadow-sm transition-all">
                    Create Category
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
