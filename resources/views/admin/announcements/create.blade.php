@extends('layouts.dashboard')

@section('title', 'New Announcement')
@section('page_title', 'Create Announcement')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <form action="{{ route('admin.announcements.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Scope</label>
                    <select name="scope" id="scopeSelect" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                        <option value="college">College-wide</option>
                        <option value="course">Course-specific</option>
                    </select>
                </div>
                <div id="courseSelectWrap" class="hidden">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Course</label>
                    <select name="course_id" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                        @foreach($courses as $c)
                            <option value="{{ $c->id }}">{{ $c->name_en }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Title (English)</label>
                    <input type="text" name="title_en" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Title (Swahili)</label>
                    <input type="text" name="title_sw" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Body (English)</label>
                    <textarea name="body_en" rows="4" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required></textarea>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Body (Swahili)</label>
                    <textarea name="body_sw" rows="4" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500"></textarea>
                </div>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="submit" class="px-5 py-2 text-sm font-bold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300">Publish</button>
                <a href="{{ route('admin.announcements.index') }}" class="px-5 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('scopeSelect').addEventListener('change', function() {
        var wrap = document.getElementById('courseSelectWrap');
        if (this.value === 'course') {
            wrap.classList.remove('hidden');
        } else {
            wrap.classList.add('hidden');
        }
    });
</script>
@endsection
