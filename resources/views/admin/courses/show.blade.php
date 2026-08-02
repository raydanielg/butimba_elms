@extends('layouts.dashboard')

@section('title', 'Course Details')
@section('page_title', $course->name_en)

@section('content')
<div class="space-y-4 max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <div class="flex items-start justify-between mb-4">
            <div>
                <h2 class="text-lg font-bold text-gray-800">{{ $course->name_en }}</h2>
                <p class="text-sm text-gray-500">{{ $course->name_sw }}</p>
                <div class="flex gap-2 mt-2">
                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700">{{ $course->category }}</span>
                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">{{ $course->type }}</span>
                    @if($course->code)
                        <span class="px-2 py-0.5 text-xs font-mono rounded-full bg-gray-100 text-gray-600">{{ $course->code }}</span>
                    @endif
                </div>
            </div>
            @if($course->is_active)
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
            @else
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-600">Inactive</span>
            @endif
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
            <div><span class="text-gray-400 text-xs">Programme</span><p class="font-semibold text-gray-700">{{ $course->programme?->name_en ?? 'N/A' }}</p></div>
            <div><span class="text-gray-400 text-xs">Department</span><p class="font-semibold text-gray-700">{{ $course->department?->name_en ?? 'N/A' }}</p></div>
            <div><span class="text-gray-400 text-xs">Teacher</span><p class="font-semibold text-gray-700">{{ $course->teacher?->name ?? 'Unassigned' }}</p></div>
            <div><span class="text-gray-400 text-xs">Medium</span><p class="font-semibold text-gray-700">{{ $course->medium }}</p></div>
            <div><span class="text-gray-400 text-xs">Duration</span><p class="font-semibold text-gray-700">{{ $course->duration_en }}</p></div>
            <div><span class="text-gray-400 text-xs">Enrolled Students</span><p class="font-semibold text-gray-700">{{ $course->enrolledStudents->count() }}</p></div>
        </div>

        <div class="mt-4 pt-4 border-t border-gray-100">
            <p class="text-xs text-gray-400 mb-1">Description</p>
            <p class="text-sm text-gray-600">{{ $course->description_en }}</p>
        </div>
    </div>

    {{-- Topics --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h3 class="text-sm font-bold text-gray-700">Topics ({{ $course->topics->count() }})</h3>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($course->topics as $topic)
                <div class="px-5 py-3 flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-700">{{ $topic->title_en }}</p>
                        <p class="text-xs text-gray-400">{{ $topic->contents->count() }} content items</p>
                    </div>
                    @if($topic->is_published)
                        <span class="text-xs px-2 py-0.5 rounded-full bg-green-100 text-green-700">Published</span>
                    @else
                        <span class="text-xs px-2 py-0.5 rounded-full bg-gray-100 text-gray-600">Draft</span>
                    @endif
                </div>
            @empty
                <p class="px-5 py-6 text-center text-sm text-gray-400">No topics yet</p>
            @endforelse
        </div>
    </div>

    <div class="flex gap-3">
        <a href="{{ route('admin.courses.edit', $course) }}" class="px-5 py-2 text-sm font-bold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">Edit Course</a>
        <a href="{{ route('admin.courses.index') }}" class="px-5 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">Back</a>
    </div>
</div>
@endsection
