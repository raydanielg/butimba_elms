@extends('layouts.dashboard')

@section('title', 'User Details')
@section('page_title', $user->name)

@section('content')
<div class="space-y-4 max-w-4xl mx-auto">
    {{-- Profile card --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 rounded-full bg-gold-400 text-emerald-900 flex items-center justify-center text-2xl font-bold">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div>
                <h2 class="text-lg font-bold text-gray-800">{{ $user->name }}</h2>
                <p class="text-sm text-gray-500">{{ $user->email }} · {{ $user->phone }}</p>
                <div class="flex gap-2 mt-1">
                    @if($user->role === 'admin')
                        <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700">Admin</span>
                    @elseif($user->role === 'teacher')
                        <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-purple-100 text-purple-700">Teacher</span>
                    @else
                        <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Student</span>
                    @endif
                    @if($user->registration_number)
                        <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-gray-100 text-gray-600">{{ $user->registration_number }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
            <div class="bg-gray-50 rounded-lg p-3">
                <p class="text-xl font-bold text-emerald-700">{{ $user->courses->count() }}</p>
                <p class="text-xs text-gray-500">Courses</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-3">
                <p class="text-xl font-bold text-emerald-700">{{ $user->payments->sum('amount') }}</p>
                <p class="text-xs text-gray-500">Paid (TSh)</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-3">
                <p class="text-xl font-bold text-emerald-700">{{ $user->submissions->count() }}</p>
                <p class="text-xs text-gray-500">Submissions</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-3">
                <p class="text-xl font-bold text-emerald-700">{{ $user->results->count() }}</p>
                <p class="text-xs text-gray-500">Results</p>
            </div>
        </div>
    </div>

    @if($user->isStudent())
    {{-- Enrolled Courses --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h3 class="text-sm font-bold text-gray-700">Enrolled Courses</h3>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($user->courses as $course)
                <div class="px-5 py-3 flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-700">{{ $course->name_en }}</p>
                        <p class="text-xs text-gray-400">{{ $course->code ?? 'N/A' }}</p>
                    </div>
                    <span class="text-xs capitalize px-2 py-0.5 rounded-full {{ $course->pivot->status === 'active' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">{{ $course->pivot->status }}</span>
                </div>
            @empty
                <p class="px-5 py-6 text-center text-sm text-gray-400">Not enrolled in any course</p>
            @endforelse
        </div>
    </div>

    {{-- Payment History --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h3 class="text-sm font-bold text-gray-700">Payment History</h3>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($user->payments as $payment)
                <div class="px-5 py-3 flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-700">TSh {{ number_format($payment->amount) }}</p>
                        <p class="text-xs text-gray-400">{{ $payment->payment_type }} · {{ $payment->payment_date->format('d M Y') }}</p>
                    </div>
                    <span class="text-xs capitalize px-2 py-0.5 rounded-full {{ $payment->status === 'verified' ? 'bg-green-100 text-green-700' : ($payment->status === 'rejected' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">{{ $payment->status }}</span>
                </div>
            @empty
                <p class="px-5 py-6 text-center text-sm text-gray-400">No payments recorded</p>
            @endforelse
        </div>
    </div>
    @endif

    <div class="flex gap-3">
        <a href="{{ route('admin.users.edit', $user) }}" class="px-5 py-2 text-sm font-bold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">Edit User</a>
        <a href="{{ route('admin.users.index') }}" class="px-5 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">Back to Users</a>
    </div>
</div>
@endsection
