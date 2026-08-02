@extends('layouts.dashboard')

@section('title', 'Add Course')
@section('page_title', 'Add New Course')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <form action="{{ route('admin.courses.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Course Code</label>
                    <input type="text" name="code" value="{{ old('code') }}" placeholder="e.g. EDU 114" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Category</label>
                    <select name="category" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                        <option value="Diploma" {{ old('category') === 'Diploma' ? 'selected' : '' }}>Diploma</option>
                        <option value="Degree" {{ old('category') === 'Degree' ? 'selected' : '' }}>Degree</option>
                        <option value="Certificate" {{ old('category') === 'Certificate' ? 'selected' : '' }}>Certificate</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Type</label>
                    <select name="type" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                        <option value="Core" {{ old('type') === 'Core' ? 'selected' : '' }}>Core</option>
                        <option value="Subject" {{ old('type') === 'Subject' ? 'selected' : '' }}>Subject</option>
                        <option value="Practical" {{ old('type') === 'Practical' ? 'selected' : '' }}>Practical</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Medium</label>
                    <select name="medium" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                        <option value="Kiswahili" {{ old('medium') === 'Kiswahili' ? 'selected' : '' }}>Kiswahili</option>
                        <option value="Kiswahili & English" {{ old('medium') === 'Kiswahili & English' ? 'selected' : '' }}>Kiswahili & English</option>
                        <option value="English" {{ old('medium') === 'English' ? 'selected' : '' }}>English</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Programme</label>
                    <select name="programme_id" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                        <option value="">-- None --</option>
                        @foreach($programmes as $p)
                            <option value="{{ $p->id }}" {{ old('programme_id') == $p->id ? 'selected' : '' }}>{{ $p->code }} - {{ $p->name_en }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Department</label>
                    <select name="department_id" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                        <option value="">-- None --</option>
                        @foreach($departments as $d)
                            <option value="{{ $d->id }}" {{ old('department_id') == $d->id ? 'selected' : '' }}>{{ $d->code }} - {{ $d->name_en }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Assign Teacher</label>
                    <select name="teacher_id" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                        <option value="">-- Unassigned --</option>
                        @foreach($teachers as $t)
                            <option value="{{ $t->id }}" {{ old('teacher_id') == $t->id ? 'selected' : '' }}>{{ $t->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Duration (EN)</label>
                    <input type="text" name="duration_en" value="{{ old('duration_en') }}" placeholder="e.g. 2 Years" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Duration (SW)</label>
                    <input type="text" name="duration_sw" value="{{ old('duration_sw') }}" placeholder="e.g. Miaka 2" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Name (English)</label>
                    <input type="text" name="name_en" value="{{ old('name_en') }}" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Name (Swahili)</label>
                    <input type="text" name="name_sw" value="{{ old('name_sw') }}" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Description (English)</label>
                    <textarea name="description_en" rows="3" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>{{ old('description_en') }}</textarea>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Description (Swahili)</label>
                    <textarea name="description_sw" rows="3" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>{{ old('description_sw') }}</textarea>
                </div>
                <div class="sm:col-span-2">
                    <label class="flex items-center gap-2 text-sm text-gray-600">
                        <input type="checkbox" name="is_active" checked class="rounded text-emerald-600 focus:ring-emerald-500">
                        Active (visible to students)
                    </label>
                </div>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="submit" class="px-5 py-2 text-sm font-bold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300">Create Course</button>
                <a href="{{ route('admin.courses.index') }}" class="px-5 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
