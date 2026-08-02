@extends('layouts.dashboard')

@section('title', 'Teacher Dashboard')
@section('page_title', 'Teacher Dashboard')

@section('content')
<div class="space-y-6">
    <div class="bg-gradient-to-r from-emerald-700 to-emerald-800 rounded-xl p-6 text-white">
        <h2 class="text-lg font-bold">Welcome, {{ auth()->user()->name }}</h2>
        <p class="text-sm text-emerald-200 mt-1">Manage your courses, students, and assessments</p>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">My Courses</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">{{ auth()->user()->taughtCourses->count() }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Total Students</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">{{ auth()->user()->taughtCourses->sum(fn($c) => $c->enrolledStudents->count()) }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Assignments</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">{{ \App\Models\Assignment::whereIn('course_id', auth()->user()->taughtCourses->pluck('id'))->count() }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
            <p class="text-xs text-gray-500 font-semibold uppercase">Submissions</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">{{ \App\Models\Submission::whereIn('assignment_id', \App\Models\Assignment::whereIn('course_id', auth()->user()->taughtCourses->pluck('id'))->pluck('id'))->count() }}</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-5 py-3 border-b border-gray-100">
            <h2 class="text-sm font-bold text-gray-700">My Courses</h2>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse(auth()->user()->taughtCourses as $course)
                <div class="px-5 py-3 flex items-center justify-between hover:bg-gray-50">
                    <div>
                        <p class="text-sm font-semibold text-gray-700">{{ $course->name_en }}</p>
                        <p class="text-xs text-gray-400">{{ $course->code ?? 'N/A' }} · {{ $course->enrolledStudents->count() }} students</p>
                    </div>
                    <a href="#" class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold">Manage →</a>
                </div>
            @empty
                <p class="px-5 py-8 text-center text-sm text-gray-400">No courses assigned yet</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
