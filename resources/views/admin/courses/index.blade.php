@extends('layouts.dashboard')

@section('title', 'Courses')
@section('page_title', 'Course Management')

@section('content')
<div class="space-y-4">
    <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-center justify-between">
        <form method="GET" class="flex flex-wrap gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search courses..." class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 w-full sm:w-64">
            <select name="category" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                <option value="">All Categories</option>
                <option value="Degree" {{ request('category') === 'Degree' ? 'selected' : '' }}>Degree</option>
                <option value="Diploma" {{ request('category') === 'Diploma' ? 'selected' : '' }}>Diploma</option>
                <option value="Certificate" {{ request('category') === 'Certificate' ? 'selected' : '' }}>Certificate</option>
            </select>
            <button type="submit" class="px-4 py-1.5 text-sm font-semibold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">Filter</button>
        </form>
        <a href="{{ route('admin.courses.create') }}" class="px-4 py-2 text-sm font-bold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300 transition-colors whitespace-nowrap">+ Add Course</a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-3 font-semibold">Code</th>
                        <th class="text-left px-5 py-3 font-semibold">Name</th>
                        <th class="text-left px-5 py-3 font-semibold">Category</th>
                        <th class="text-left px-5 py-3 font-semibold">Teacher</th>
                        <th class="text-left px-5 py-3 font-semibold">Status</th>
                        <th class="text-right px-5 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($courses as $course)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 text-xs font-mono text-gray-500">{{ $course->code ?? 'N/A' }}</td>
                            <td class="px-5 py-3">
                                <a href="{{ route('admin.courses.show', $course) }}" class="font-semibold text-gray-700 hover:text-emerald-600">{{ $course->name_en }}</a>
                                <p class="text-xs text-gray-400">{{ $course->name_sw }}</p>
                            </td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700">{{ $course->category }}</span>
                            </td>
                            <td class="px-5 py-3 text-gray-600">{{ $course->teacher?->name ?? 'Unassigned' }}</td>
                            <td class="px-5 py-3">
                                @if($course->is_active)
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-gray-100 text-gray-600">Inactive</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-right whitespace-nowrap">
                                <a href="{{ route('admin.courses.edit', $course) }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold">Edit</a>
                                <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" class="inline ml-2" onsubmit="return confirm('Delete this course?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-semibold">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="px-5 py-8 text-center text-gray-400">No courses found</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-gray-100">
            {{ $courses->links() }}
        </div>
    </div>
</div>
@endsection
