@extends('layouts.dashboard')

@section('title', 'Review Application')
@section('page_title', 'Application Review')

@section('content')
<div class="space-y-4 max-w-4xl mx-auto">
    {{-- Application Details --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100 flex items-center justify-between">
            <div>
                <h2 class="text-sm font-bold text-gray-700">{{ $application->full_name }}</h2>
                <p class="text-xs text-gray-400 font-mono">{{ $application->tracking_code }}</p>
            </div>
            @if($application->status === 'Accepted')
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Accepted</span>
            @elseif($application->status === 'Rejected')
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">Rejected</span>
            @elseif($application->status === 'Under Review')
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Under Review</span>
            @else
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span>
            @endif
        </div>

        <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-3 text-sm">
            <div><span class="text-gray-400 text-xs">Email</span><p class="font-semibold text-gray-700">{{ $application->email }}</p></div>
            <div><span class="text-gray-400 text-xs">Phone</span><p class="font-semibold text-gray-700">{{ $application->phone }}</p></div>
            <div><span class="text-gray-400 text-xs">Gender</span><p class="font-semibold text-gray-700">{{ $application->gender }}</p></div>
            <div><span class="text-gray-400 text-xs">Date of Birth</span><p class="font-semibold text-gray-700">{{ $application->dob->format('d M Y') }}</p></div>
            <div><span class="text-gray-400 text-xs">Region</span><p class="font-semibold text-gray-700">{{ $application->region }}</p></div>
            <div><span class="text-gray-400 text-xs">District</span><p class="font-semibold text-gray-700">{{ $application->district }}</p></div>
            <div><span class="text-gray-400 text-xs">Ward</span><p class="font-semibold text-gray-700">{{ $application->ward }}</p></div>
            <div><span class="text-gray-400 text-xs">Address</span><p class="font-semibold text-gray-700">{{ $application->address }}</p></div>
            <div><span class="text-gray-400 text-xs">Next of Kin Phone</span><p class="font-semibold text-gray-700">{{ $application->relative_phone }}</p></div>
            <div><span class="text-gray-400 text-xs">Employment</span><p class="font-semibold text-gray-700">{{ $application->employment_status }}</p></div>
            <div><span class="text-gray-400 text-xs">Previous Profession</span><p class="font-semibold text-gray-700">{{ $application->previous_profession }}</p></div>
            <div><span class="text-gray-400 text-xs">Previous College</span><p class="font-semibold text-gray-700">{{ $application->college_name }}</p></div>
            <div><span class="text-gray-400 text-xs">Graduation Year</span><p class="font-semibold text-gray-700">{{ $application->graduation_year }}</p></div>
            <div><span class="text-gray-400 text-xs">Certificate Number</span><p class="font-semibold text-gray-700">{{ $application->certificate_number }}</p></div>
            <div class="sm:col-span-2"><span class="text-gray-400 text-xs">Applied Course</span><p class="font-semibold text-emerald-700">{{ $application->applied_course }}</p></div>
        </div>
    </div>

    {{-- Review Actions --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
        <h3 class="text-sm font-bold text-gray-700 mb-4">Review Actions</h3>
        @if($application->reviewed_at)
            <p class="text-xs text-gray-400 mb-3">Reviewed by {{ $application->reviewer?->name ?? 'N/A' }} on {{ $application->reviewed_at->format('d M Y H:i') }}</p>
        @endif
        <form action="{{ route('admin.applications.updateStatus', $application) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-3">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Status</label>
                    <select name="status" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                        <option value="Pending" {{ $application->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Under Review" {{ $application->status === 'Under Review' ? 'selected' : '' }}>Under Review</option>
                        <option value="Accepted" {{ $application->status === 'Accepted' ? 'selected' : '' }}>Accepted</option>
                        <option value="Rejected" {{ $application->status === 'Rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Admin Notes</label>
                    <textarea name="admin_notes" rows="3" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">{{ old('admin_notes', $application->admin_notes) }}</textarea>
                </div>
                <div class="flex gap-3">
                    <button type="submit" class="px-5 py-2 text-sm font-bold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">Update Status</button>
                    <a href="{{ route('admin.applications.index') }}" class="px-5 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
