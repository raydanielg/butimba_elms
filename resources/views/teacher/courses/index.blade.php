@extends('layouts.dashboard')

@section('title', 'My Courses')
@section('page_title', 'My Courses')

@section('content')
<div class="space-y-4">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-3 font-semibold">Course</th>
                        <th class="text-left px-5 py-3 font-semibold">Code</th>
                        <th class="text-left px-5 py-3 font-semibold">Students</th>
                        <th class="text-left px-5 py-3 font-semibold">Topics</th>
                        <th class="text-left px-5 py-3 font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($courses as $course)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 font-semibold text-gray-700">{{ $course->name_en }}</td>
                            <td class="px-5 py-3 text-xs font-mono text-gray-500">{{ $course->code ?? 'N/A' }}</td>
                            <td class="px-5 py-3 text-gray-600">{{ $course->enrolledStudents->count() }}</td>
                            <td class="px-5 py-3 text-gray-600">{{ $course->topics->count() }}</td>
                            <td class="px-5 py-3">
                                @if($course->is_active)
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-gray-100 text-gray-600">Inactive</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="px-5 py-8 text-center text-gray-400">No courses assigned</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
