@extends('layouts.dashboard')

@section('title', 'User Management')
@section('page_title', 'User Management')

@section('content')
<div class="space-y-4">
    {{-- Toolbar --}}
    <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-center justify-between">
        <form method="GET" class="flex flex-wrap gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, email, phone..." class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent w-full sm:w-64">
            <select name="role" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                <option value="">All Roles</option>
                <option value="admin" {{ request('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="teacher" {{ request('role') === 'teacher' ? 'selected' : '' }}>Teacher</option>
                <option value="user" {{ request('role') === 'user' ? 'selected' : '' }}>Student</option>
            </select>
            <button type="submit" class="px-4 py-1.5 text-sm font-semibold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">Filter</button>
        </form>
        <a href="{{ route('admin.users.create') }}" class="px-4 py-2 text-sm font-bold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300 transition-colors whitespace-nowrap">+ Add User</a>
    </div>

    {{-- Table --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="text-left px-5 py-3 font-semibold">Name</th>
                        <th class="text-left px-5 py-3 font-semibold">Email</th>
                        <th class="text-left px-5 py-3 font-semibold">Phone</th>
                        <th class="text-left px-5 py-3 font-semibold">Role</th>
                        <th class="text-left px-5 py-3 font-semibold">Status</th>
                        <th class="text-right px-5 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <a href="{{ route('admin.users.show', $user) }}" class="font-semibold text-gray-700 hover:text-emerald-600">{{ $user->name }}</a>
                                @if($user->registration_number)
                                    <p class="text-xs text-gray-400">{{ $user->registration_number }}</p>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-gray-600">{{ $user->email }}</td>
                            <td class="px-5 py-3 text-gray-600">{{ $user->phone }}</td>
                            <td class="px-5 py-3">
                                @if($user->role === 'admin')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700">Admin</span>
                                @elseif($user->role === 'teacher')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-purple-100 text-purple-700">Teacher</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Student</span>
                                @endif
                            </td>
                            <td class="px-5 py-3">
                                @if($user->status === 'active')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                                @elseif($user->status === 'suspended')
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700">Suspended</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-gray-100 text-gray-600">Inactive</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-right whitespace-nowrap">
                                <a href="{{ route('admin.users.edit', $user) }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold">Edit</a>
                                <form action="{{ route('admin.users.resetPassword', $user) }}" method="POST" class="inline ml-2">
                                    @csrf
                                    <button type="submit" class="text-xs text-gold-600 hover:text-gold-700 font-semibold">Reset PW</button>
                                </form>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline ml-2" onsubmit="return confirm('Delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-semibold">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="px-5 py-8 text-center text-gray-400">No users found</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-gray-100">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
