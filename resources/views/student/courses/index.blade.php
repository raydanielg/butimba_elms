@extends('layouts.dashboard')

@section('title', 'My Courses')
@section('page_title', 'My Courses')

@section('content')
<div class="space-y-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse($courses as $course)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <p class="text-sm font-bold text-gray-800">{{ $course->name_en }}</p>
                        <p class="text-xs text-gray-400">{{ $course->name_sw }}</p>
                    </div>
                    @if($course->code)
                        <span class="text-xs font-mono px-2 py-0.5 rounded-full bg-gray-100 text-gray-600">{{ $course->code }}</span>
                    @endif
                </div>
                <p class="text-xs text-gray-500 mb-3">{{ Str::limit($course->description_en, 100) }}</p>
                <div class="flex items-center gap-3 text-xs text-gray-400">
                    <span>{{ $course->topics->count() }} topics</span>
                    <span>·</span>
                    <span class="capitalize">{{ $course->pivot->status }}</span>
                </div>
            </div>
        @empty
            <div class="col-span-full bg-white rounded-xl shadow-sm border border-gray-100 p-8 text-center">
                <p class="text-sm text-gray-400">You are not enrolled in any course yet.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
