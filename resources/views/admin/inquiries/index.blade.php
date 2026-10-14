@extends('layouts.admin')

@section('header')
    Client Inquiries &amp; Pipeline Leads
@endsection

@section('content')
<div class="space-y-6">

    <!-- Header & Status Filter Pills -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="flex flex-wrap gap-2">
            <a href="{{ route('admin.inquiries.index') }}" class="px-4 py-2 rounded-xl text-xs font-semibold transition-all {{ empty($status) ? 'bg-brand-600 text-white shadow-sm' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                All ({{ $counts['all'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="px-4 py-2 rounded-xl text-xs font-semibold transition-all {{ $status === 'new' ? 'bg-rose-600 text-white shadow-sm' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                New Unread ({{ $counts['new'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'in_review']) }}" class="px-4 py-2 rounded-xl text-xs font-semibold transition-all {{ $status === 'in_review' ? 'bg-amber-600 text-white shadow-sm' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                In Review ({{ $counts['in_review'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'contacted']) }}" class="px-4 py-2 rounded-xl text-xs font-semibold transition-all {{ $status === 'contacted' ? 'bg-brand-600 text-white shadow-sm' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                Contacted ({{ $counts['contacted'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'closed']) }}" class="px-4 py-2 rounded-xl text-xs font-semibold transition-all {{ $status === 'closed' ? 'bg-emerald-600 text-white shadow-sm' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                Closed ({{ $counts['closed'] }})
            </a>
        </div>
    </div>

    <!-- Inquiries Table Card -->
    <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-700 border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-slate-500 font-semibold text-[11px] uppercase tracking-wider">
                        <th class="pb-3.5">Client Identity</th>
                        <th class="pb-3.5">Solution Scope</th>
                        <th class="pb-3.5">Budget Tier</th>
                        <th class="pb-3.5">Status</th>
                        <th class="pb-3.5">Received Date</th>
                        <th class="pb-3.5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($inquiries as $inquiry)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-4">
                            <div class="font-bold text-slate-900 text-sm">{{ $inquiry->name }}</div>
                            <div class="text-[11px] text-slate-500">{{ $inquiry->email }}</div>
                            @if(!empty($inquiry->phone))
                            <div class="text-[11px] text-brand-600 font-medium">{{ $inquiry->phone }}</div>
                            @endif
                        </td>
                        <td class="py-4 font-medium text-slate-700">
                            {{ $inquiry->service ?? 'Custom Solution' }}
                        </td>
                        <td class="py-4 font-bold text-emerald-600">
                            {{ $inquiry->budget ?? 'Flexible / TBD' }}
                        </td>
                        <td class="py-4">
                            @if($inquiry->status === 'new')
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-rose-50 text-rose-700 border border-rose-200">New Unread</span>
                            @elseif($inquiry->status === 'in_review')
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">Under Review</span>
                            @elseif($inquiry->status === 'contacted')
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-blue-50 text-brand-700 border border-blue-200">Contacted</span>
                            @else
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">Closed</span>
                            @endif
                        </td>
                        <td class="py-4 text-slate-500 text-[11px]">
                            {{ $inquiry->created_at->format('M d, Y - h:i A') }}
                        </td>
                        <td class="py-4 text-right space-x-2">
                            <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="px-3.5 py-1.5 rounded-xl bg-slate-100 hover:bg-brand-50 text-brand-600 hover:text-brand-700 border border-slate-200 font-semibold transition-colors">
                                Review Brief
                            </a>
                            <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="inline-block" onsubmit="return confirm('Permanently remove this inquiry?')">
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
                        <td colspan="6" class="py-12 text-center text-slate-500">
                            No inquiries match the current filter.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $inquiries->links() }}
        </div>
    </div>

</div>
@endsection
