@extends('layouts.admin')

@section('header')
    Engineering Articles &amp; Insights
@endsection

@section('content')
<div class="space-y-6">

    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="font-display font-bold text-xl text-slate-900">Articles &amp; Thought Leadership</h2>
            <p class="text-xs text-slate-500 mt-1">Publish technical deep dives, architectural benchmarks, and SEO case reviews.</p>
        </div>
        <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center space-x-2 px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold shadow-sm transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span>Add New Post</span>
        </a>
    </div>

    <!-- Table Card -->
    <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-700 border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-slate-500 font-semibold text-[11px] uppercase tracking-wider">
                        <th class="pb-3.5">Article Title</th>
                        <th class="pb-3.5">Category</th>
                        <th class="pb-3.5">Published Date</th>
                        <th class="pb-3.5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($posts as $post)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-4">
                            <div class="font-bold text-slate-900 text-sm">{{ $post->title }}</div>
                            <div class="text-[11px] text-slate-500 font-mono mt-0.5">/blog/{{ $post->slug }}</div>
                        </td>
                        <td class="py-4">
                            <span class="px-2.5 py-1 rounded-lg bg-blue-50 text-brand-700 border border-blue-200 text-[11px] font-semibold">
                                {{ $post->category->name ?? 'General' }}
                            </span>
                        </td>
                        <td class="py-4 text-slate-500 font-mono text-[11px]">
                            {{ $post->created_at ? $post->created_at->format('d M Y') : 'N/A' }}
                        </td>
                        <td class="py-4 text-right">
                            <div class="inline-flex items-center space-x-2">
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="p-2 rounded-xl bg-slate-100 hover:bg-blue-50 text-brand-600 hover:text-brand-700 border border-slate-200 transition-all" title="Edit Post">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Permanently delete this article?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-xl bg-slate-100 hover:bg-rose-50 text-slate-500 hover:text-rose-600 border border-slate-200 transition-all" title="Delete Post">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="py-10 text-center text-slate-500">
                            No articles published yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($posts->hasPages())
        <div class="mt-6 pt-4 border-t border-slate-200">
            {{ $posts->links() }}
        </div>
        @endif
    </div>

</div>
@endsection
