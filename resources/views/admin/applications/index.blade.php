@extends('layouts.dashboard')

@section('title', 'Applications')
@section('page_title', 'Applications')

@section('content')
<div class="space-y-4">
    {{-- Stats --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
        <div class="bg-white rounded-lg shadow-sm p-3 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Total</p>
            <p class="text-xl font-bold text-gray-800">{{ $stats['total'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-3 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Pending</p>
            <p class="text-xl font-bold text-yellow-600">{{ $stats['pending'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-3 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Accepted</p>
            <p class="text-xl font-bold text-green-600">{{ $stats['accepted'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-3 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Rejected</p>
            <p class="text-xl font-bold text-red-600">{{ $stats['rejected'] }}</p>
        </div>
    </div>

    {{-- Filter --}}
    <form method="GET" class="flex flex-wrap gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, email, tracking code..." class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 w-full sm:w-64">
        <select name="status" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
            <option value="">All Status</option>
            <option value="Pending" {{ request('status') === 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Under Review" {{ request('status') === 'Under Review' ? 'selected' : '' }}>Under Review</option>
            <option value="Accepted" {{ request('status') === 'Accepted' ? 'selected' : '' }}>Accepted</option>
            <option value="Rejected" {{ request('status') === 'Rejected' ? 'selected' : '' }}>Rejected</option>
        </select>
        <button type="submit" class="px-4 py-1.5 text-sm font-semibold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">Filter</button>
    </form>

    {{-- Table --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-3 font-semibold">Applicant</th>
                        <th class="text-left px-5 py-3 font-semibold">Course</th>
                        <th class="text-left px-5 py-3 font-semibold">Tracking Code</th>
                        <th class="text-left px-5 py-3 font-semibold">Status</th>
                        <th class="text-left px-5 py-3 font-semibold">Date</th>
                        <th class="text-right px-5 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($applications as $app)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <p class="font-semibold text-gray-700">{{ $app->full_name }}</p>
                                <p class="text-xs text-gray-400">{{ $app->email }}</p>
                            </td>
                            <td class="px-5 py-3 text-gray-600">{{ $app->applied_course }}</td>
                            <td class="px-5 py-3 text-xs font-mono text-gray-500">{{ $app->tracking_code }}</td>
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
                            <td class="px-5 py-3 text-right">
                                <a href="{{ route('admin.applications.show', $app) }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold">Review →</a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="px-5 py-8 text-center text-gray-400">No applications found</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-gray-100">
            {{ $applications->links() }}
        </div>
    </div>
</div>
@endsection
