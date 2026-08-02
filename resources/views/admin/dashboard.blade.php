@extends('layouts.dashboard')

@section('title', 'Admin Dashboard')
@section('page_title', 'Admin Dashboard')

@section('content')
<div class="space-y-6">
    {{-- Stats Grid --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-semibold text-gray-500 uppercase">Applications</span>
                <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-gray-800">{{ $stats['applications'] }}</p>
            <p class="text-xs text-orange-500 mt-1">{{ $stats['pending_applications'] }} pending</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-semibold text-gray-500 uppercase">Students</span>
                <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-gray-800">{{ $stats['students'] }}</p>
            <p class="text-xs text-emerald-500 mt-1">{{ $stats['enrollments'] }} active enrollments</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-semibold text-gray-500 uppercase">Teachers</span>
                <div class="w-8 h-8 rounded-lg bg-purple-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-gray-800">{{ $stats['teachers'] }}</p>
            <p class="text-xs text-gray-400 mt-1">Active staff</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-semibold text-gray-500 uppercase">Revenue</span>
                <div class="w-8 h-8 rounded-lg bg-gold-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-gray-800">TSh {{ number_format($stats['payments_verified']) }}</p>
            <p class="text-xs text-orange-500 mt-1">{{ $stats['payments_pending'] }} pending</p>
        </div>
    </div>

    {{-- Secondary Stats --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
            </div>
            <div>
                <p class="text-lg font-bold text-gray-800">{{ $stats['courses'] }}</p>
                <p class="text-xs text-gray-500">Courses</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
            <div>
                <p class="text-lg font-bold text-gray-800">{{ $stats['programmes'] }}</p>
                <p class="text-xs text-gray-500">Programmes</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/></svg>
            </div>
            <div>
                <p class="text-lg font-bold text-gray-800">{{ $stats['departments'] }}</p>
                <p class="text-xs text-gray-500">Departments</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div>
                <p class="text-lg font-bold text-gray-800">{{ $stats['accepted_applications'] }}</p>
                <p class="text-xs text-gray-500">Accepted</p>
            </div>
        </div>
    </div>

    {{-- Recent Applications --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="flex items-center justify-between px-5 py-3 border-b border-gray-100">
            <h2 class="text-sm font-bold text-gray-700">Recent Applications</h2>
            <a href="{{ route('admin.applications.index') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold">View All →</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-2 font-semibold">Name</th>
                        <th class="text-left px-5 py-2 font-semibold">Course</th>
                        <th class="text-left px-5 py-2 font-semibold">Status</th>
                        <th class="text-left px-5 py-2 font-semibold">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($recentApplications as $app)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <a href="{{ route('admin.applications.show', $app) }}" class="font-semibold text-gray-700 hover:text-emerald-600">{{ $app->full_name }}</a>
                                <p class="text-xs text-gray-400">{{ $app->tracking_code }}</p>
                            </td>
                            <td class="px-5 py-3 text-gray-600">{{ $app->applied_course }}</td>
                            <td class="px-5 py-3">
                                @if($app->status === 'Accepted')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Accepted</span>
                                @elseif($app->status === 'Rejected')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700">Rejected</span>
                                @elseif($app->status === 'Under Review')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Under Review</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-xs text-gray-500">{{ $app->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Recent Payments --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="flex items-center justify-between px-5 py-3 border-b border-gray-100">
            <h2 class="text-sm font-bold text-gray-700">Recent Payments</h2>
            <a href="{{ route('admin.payments.index') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold">View All →</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-2 font-semibold">Student</th>
                        <th class="text-left px-5 py-2 font-semibold">Amount</th>
                        <th class="text-left px-5 py-2 font-semibold">Type</th>
                        <th class="text-left px-5 py-2 font-semibold">Status</th>
                        <th class="text-left px-5 py-2 font-semibold">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($recentPayments as $payment)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 font-semibold text-gray-700">{{ $payment->student_name ?? ($payment->user?->name ?? 'N/A') }}</td>
                            <td class="px-5 py-3 text-gray-600">TSh {{ number_format($payment->amount) }}</td>
                            <td class="px-5 py-3 text-gray-600 capitalize">{{ $payment->payment_type }}</td>
                            <td class="px-5 py-3">
                                @if($payment->status === 'verified')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Verified</span>
                                @elseif($payment->status === 'rejected')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700">Rejected</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-xs text-gray-500">{{ $payment->payment_date->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="px-5 py-6 text-center text-gray-400 text-sm">No payments yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
