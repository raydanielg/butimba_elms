@extends('layouts.dashboard')

@section('title', 'My Status')
@section('page_title', 'My Status')

@section('content')
<div class="space-y-4 max-w-4xl mx-auto">
    {{-- Results --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h2 class="text-sm font-bold text-gray-700">Results</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-2 font-semibold">Course</th>
                        <th class="text-left px-5 py-2 font-semibold">Marks</th>
                        <th class="text-left px-5 py-2 font-semibold">Grade</th>
                        <th class="text-left px-5 py-2 font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($user->results as $result)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 font-semibold text-gray-700">{{ $result->course->name_en }}</td>
                            <td class="px-5 py-3 text-gray-600">{{ $result->marks }}</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-0.5 text-xs font-bold rounded-full bg-emerald-100 text-emerald-700">{{ $result->grade }}</span>
                            </td>
                            <td class="px-5 py-3">
                                @if($result->status === 'published')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Published</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-gray-100 text-gray-600">Draft</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-5 py-6 text-center text-gray-400">No results available</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Payments --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h2 class="text-sm font-bold text-gray-700">Payment History</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-2 font-semibold">Date</th>
                        <th class="text-left px-5 py-2 font-semibold">Amount</th>
                        <th class="text-left px-5 py-2 font-semibold">Type</th>
                        <th class="text-left px-5 py-2 font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($user->payments as $payment)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 text-gray-600">{{ $payment->payment_date->format('d M Y') }}</td>
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
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-5 py-6 text-center text-gray-400">No payments recorded</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Summary --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Total Paid</p>
            <p class="text-2xl font-bold text-green-600 mt-1">TSh {{ number_format($user->payments->where('status', 'verified')->sum('amount')) }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Pending Payments</p>
            <p class="text-2xl font-bold text-yellow-600 mt-1">TSh {{ number_format($user->payments->where('status', 'pending')->sum('amount')) }}</p>
        </div>
    </div>
</div>
@endsection
