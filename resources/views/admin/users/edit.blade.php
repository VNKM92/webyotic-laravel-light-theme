@extends('layouts.admin')

@section('header')
    Edit User Permissions
@endsection

@section('content')
<div class="max-w-3xl mx-auto space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.users.index') }}" class="inline-flex items-center space-x-2 text-xs font-semibold text-brand-600 hover:text-brand-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            <span>Back to Users</span>
        </a>
    </div>

    <div class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 space-y-6 shadow-sm">
        <div class="border-b border-slate-200 pb-4">
            <h3 class="text-lg font-bold text-slate-900 flex items-center space-x-2">
                <span class="w-2 h-2 rounded-full bg-brand-600"></span>
                <span>User Account &amp; Role</span>
            </h3>
        </div>

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Full Name <span class="text-rose-500">*</span></label>
                    <input type="text" name="name" value="{{ $user->name }}" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all" required>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Email Address (Read Only)</label>
                    <input type="email" value="{{ $user->email }}" disabled class="w-full px-4 py-2.5 rounded-xl bg-slate-100 border border-slate-200 text-slate-500 text-sm cursor-not-allowed">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Access Role <span class="text-rose-500">*</span></label>
                    <select name="role" class="w-full px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all" required>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Super Admin (Full Console Access)</option>
                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Standard User / Client</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-end space-x-4 pt-4 border-t border-slate-200">
                <a href="{{ route('admin.users.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold border border-slate-200 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold shadow-sm transition-all">
                    Update User
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
