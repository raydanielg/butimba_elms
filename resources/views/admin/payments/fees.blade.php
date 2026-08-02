@extends('layouts.dashboard')

@section('title', 'Fee Structures')
@section('page_title', 'Fee Structures')

@section('content')
<div class="space-y-4 max-w-4xl">
    {{-- Add Fee Form --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
        <h3 class="text-sm font-bold text-gray-700 mb-4">Add Fee Structure</h3>
        <form action="{{ route('admin.payments.storeFee') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Programme (optional)</label>
                    <select name="programme_id" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                        <option value="">-- All Programmes --</option>
                        @foreach($programmes as $p)
                            <option value="{{ $p->id }}">{{ $p->code }} - {{ $p->name_en }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Amount (TSh)</label>
                    <input type="number" name="amount" step="0.01" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Fee Type (EN)</label>
                    <input type="text" name="fee_type" placeholder="e.g. Registration Fee" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Fee Type (SW)</label>
                    <input type="text" name="fee_type_sw" placeholder="e.g. Ada ya Usajili" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Description (EN)</label>
                    <textarea name="description_en" rows="2" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500"></textarea>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Description (SW)</label>
                    <textarea name="description_sw" rows="2" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500"></textarea>
                </div>
            </div>
            <button type="submit" class="mt-4 px-5 py-2 text-sm font-bold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300">Add Fee</button>
        </form>
    </div>

    {{-- Fee List --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h3 class="text-sm font-bold text-gray-700">Current Fee Structures</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-3 font-semibold">Fee Type</th>
                        <th class="text-left px-5 py-3 font-semibold">Programme</th>
                        <th class="text-left px-5 py-3 font-semibold">Amount</th>
                        <th class="text-right px-5 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($feeStructures as $fee)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 font-semibold text-gray-700">{{ $fee->fee_type }}</td>
                            <td class="px-5 py-3 text-gray-600">{{ $fee->programme?->code ?? 'All' }}</td>
                            <td class="px-5 py-3 text-gray-600">TSh {{ number_format($fee->amount) }}</td>
                            <td class="px-5 py-3 text-right">
                                <form action="{{ route('admin.payments.destroyFee', $fee) }}" method="POST" class="inline" onsubmit="return confirm('Remove this fee?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-semibold">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-5 py-8 text-center text-gray-400">No fee structures yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-gray-100">
            {{ $feeStructures->links() }}
        </div>
    </div>

    <a href="{{ route('admin.payments.index') }}" class="text-sm text-emerald-600 hover:text-emerald-700 font-semibold">← Back to Payments</a>
</div>
@endsection
