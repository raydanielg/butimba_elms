@extends('layouts.dashboard')

@section('title', 'Finance')
@section('page_title', 'Payment Management')

@section('content')
<div class="space-y-4">
    {{-- Stats --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
        <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Total Verified</p>
            <p class="text-xl font-bold text-green-600">TSh {{ number_format($stats['total_verified']) }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Pending</p>
            <p class="text-xl font-bold text-yellow-600">{{ $stats['total_pending'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Rejected</p>
            <p class="text-xl font-bold text-red-600">{{ $stats['total_rejected'] }}</p>
        </div>
    </div>

    {{-- Filter --}}
    <form method="GET" class="flex flex-wrap gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search student or reference..." class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 w-full sm:w-64">
        <select name="status" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
            <option value="">All Status</option>
            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="verified" {{ request('status') === 'verified' ? 'selected' : '' }}>Verified</option>
            <option value="rejected" {{ request('status') === 'rejected' ? 'selected' : '' }}>Rejected</option>
        </select>
        <button type="submit" class="px-4 py-1.5 text-sm font-semibold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">Filter</button>
        <a href="{{ route('admin.payments.fees') }}" class="px-4 py-1.5 text-sm font-semibold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300">Fee Structures</a>
    </form>

    {{-- Table --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-3 font-semibold">Student</th>
                        <th class="text-left px-5 py-3 font-semibold">Amount</th>
                        <th class="text-left px-5 py-3 font-semibold">Type</th>
                        <th class="text-left px-5 py-3 font-semibold">Method</th>
                        <th class="text-left px-5 py-3 font-semibold">Reference</th>
                        <th class="text-left px-5 py-3 font-semibold">Status</th>
                        <th class="text-right px-5 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($payments as $payment)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 font-semibold text-gray-700">{{ $payment->student_name ?? ($payment->user?->name ?? 'N/A') }}</td>
                            <td class="px-5 py-3 text-gray-600">TSh {{ number_format($payment->amount) }}</td>
                            <td class="px-5 py-3 text-gray-600 capitalize">{{ $payment->payment_type }}</td>
                            <td class="px-5 py-3 text-gray-600 capitalize">{{ $payment->method }}</td>
                            <td class="px-5 py-3 text-xs text-gray-500">{{ $payment->reference ?? 'N/A' }}</td>
                            <td class="px-5 py-3">
                                @if($payment->status === 'verified')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Verified</span>
                                @elseif($payment->status === 'rejected')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700">Rejected</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-right whitespace-nowrap">
                                @if($payment->status === 'pending')
                                    <form action="{{ route('admin.payments.verify', $payment) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="text-xs text-green-600 hover:text-green-700 font-semibold">Verify</button>
                                    </form>
                                    <form action="{{ route('admin.payments.reject', $payment) }}" method="POST" class="inline ml-2">
                                        @csrf
                                        <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-semibold">Reject</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="px-5 py-8 text-center text-gray-400">No payments found</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-gray-100">
            {{ $payments->links() }}
        </div>
    </div>
</div>
@endsection
