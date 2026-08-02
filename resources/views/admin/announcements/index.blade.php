@extends('layouts.dashboard')

@section('title', 'Announcements')
@section('page_title', 'Announcements')

@section('content')
<div class="space-y-4">
    <div class="flex justify-between items-center">
        <p class="text-sm text-gray-500">Manage college-wide and course announcements</p>
        <a href="{{ route('admin.announcements.create') }}" class="px-4 py-2 text-sm font-bold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300 transition-colors">+ New Announcement</a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-3 font-semibold">Title</th>
                        <th class="text-left px-5 py-3 font-semibold">Scope</th>
                        <th class="text-left px-5 py-3 font-semibold">Course</th>
                        <th class="text-left px-5 py-3 font-semibold">Posted By</th>
                        <th class="text-left px-5 py-3 font-semibold">Date</th>
                        <th class="text-right px-5 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($announcements as $ann)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 font-semibold text-gray-700">{{ $ann->title_en }}</td>
                            <td class="px-5 py-3">
                                @if($ann->scope === 'college')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700">College</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Course</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-gray-600">{{ $ann->course?->name_en ?? 'N/A' }}</td>
                            <td class="px-5 py-3 text-gray-600">{{ $ann->user?->name ?? 'N/A' }}</td>
                            <td class="px-5 py-3 text-xs text-gray-500">{{ $ann->created_at->format('d M Y') }}</td>
                            <td class="px-5 py-3 text-right">
                                <form action="{{ route('admin.announcements.destroy', $ann) }}" method="POST" class="inline" onsubmit="return confirm('Delete this announcement?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-semibold">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="px-5 py-8 text-center text-gray-400">No announcements yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-gray-100">
            {{ $announcements->links() }}
        </div>
    </div>
</div>
@endsection
