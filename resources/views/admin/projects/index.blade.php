@extends('layouts.admin')

@section('header')
    Case Studies &amp; Projects Showcase
@endsection

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="font-display font-bold text-xl text-slate-900">Case Studies Catalog</h2>
            <p class="text-xs text-slate-500">Manage client projects, category tags, technologies, and live demo links</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold shadow-sm transition-all flex items-center space-x-1.5 self-start sm:self-auto">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span>Add New Case Study</span>
        </a>
    </div>

    <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-700 border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-slate-500 font-semibold text-[11px] uppercase tracking-wider">
                        <th class="pb-3.5">Project Title</th>
                        <th class="pb-3.5">Category</th>
                        <th class="pb-3.5">Live Link</th>
                        <th class="pb-3.5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($projects as $project)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-4">
                            <div class="flex items-center space-x-3">
                                @if(!empty($project->image))
                                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-10 h-10 rounded-xl object-cover ring-1 ring-slate-200">
                                @endif
                                <div>
                                    <div class="font-bold text-slate-900 text-sm">{{ $project->title }}</div>
                                    <div class="text-[11px] text-slate-500 truncate max-w-sm">{{ $project->description }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4">
                            <span class="px-2.5 py-1 rounded-lg bg-blue-50 border border-blue-200 text-brand-700 font-medium text-[11px]">
                                {{ $project->category ?? 'Platform' }}
                            </span>
                        </td>
                        <td class="py-4">
                            @if(!empty($project->link) && $project->link !== '#')
                            <a href="{{ $project->link }}" target="_blank" class="text-brand-600 hover:underline truncate max-w-xs block font-medium">
                                {{ $project->link }}
                            </a>
                            @else
                            <span class="text-slate-400">No live URL</span>
                            @endif
                        </td>
                        <td class="py-4 text-right space-x-2">
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="px-3.5 py-1.5 rounded-xl bg-slate-100 hover:bg-brand-50 text-brand-600 hover:text-brand-700 border border-slate-200 text-xs font-semibold transition-colors">
                                Edit
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Permanently delete this project?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 rounded-xl text-slate-400 hover:text-rose-600 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="py-8 text-center text-slate-500">
                            No projects recorded yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
