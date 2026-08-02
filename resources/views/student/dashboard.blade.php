@extends('layouts.dashboard')

@section('title', 'Student Dashboard')
@section('page_title', 'My Dashboard')

@section('content')
<div class="space-y-6">
    <div class="bg-gradient-to-r from-emerald-700 to-emerald-800 rounded-xl p-6 text-white">
        <h2 class="text-lg font-bold">Karibu, {{ $user->name }}</h2>
        <p class="text-sm text-emerald-200 mt-1">Welcome to your learning dashboard</p>
        @if($user->registration_number)
            <p class="text-xs text-emerald-300 mt-2">Reg. No: {{ $user->registration_number }}</p>
        @endif
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">My Courses</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $courses->count() }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Submissions</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $user->submissions->count() }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Results</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $user->results->count() }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Payments</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">TSh {{ number_format($user->payments->where('status', 'verified')->sum('amount')) }}</p>
        </div>
    </div>

    {{-- My Courses --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h2 class="text-sm font-bold text-gray-700">My Courses</h2>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($courses as $course)
                <div class="px-5 py-3 flex items-center justify-between hover:bg-gray-50">
                    <div>
                        <p class="text-sm font-semibold text-gray-700">{{ $course->name_en }}</p>
                        <p class="text-xs text-gray-400">{{ $course->code ?? 'N/A' }} · {{ $course->topics->count() }} topics</p>
                    </div>
                    <span class="text-xs capitalize px-2 py-0.5 rounded-full {{ $course->pivot->status === 'active' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">{{ $course->pivot->status }}</span>
                </div>
            @empty
                <p class="px-5 py-8 text-center text-sm text-gray-400">Not enrolled in any course yet</p>
            @endforelse
        </div>
    </div>

    {{-- Announcements --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h2 class="text-sm font-bold text-gray-700">Announcements</h2>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($announcements as $ann)
                <div class="px-5 py-3">
                    <p class="text-sm font-semibold text-gray-700">{{ $ann->title_en }}</p>
                    <p class="text-xs text-gray-400 mt-1">{{ $ann->created_at->format('d M Y') }}</p>
                    <p class="text-sm text-gray-600 mt-1">{{ Str::limit($ann->body_en, 120) }}</p>
                </div>
            @empty
                <p class="px-5 py-8 text-center text-sm text-gray-400">No announcements</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
