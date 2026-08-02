@extends('layouts.dashboard')

@section('title', 'Add User')
@section('page_title', 'Add New User')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="255XXXXXXXXX" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Role</label>
                    <select name="role" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                        <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>Student</option>
                        <option value="teacher" {{ old('role') === 'teacher' ? 'selected' : '' }}>Teacher</option>
                        <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Programme (for students)</label>
                    <select name="programme_id" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500">
                        <option value="">-- None --</option>
                        @foreach($programmes as $p)
                            <option value="{{ $p->id }}" {{ old('programme_id') == $p->id ? 'selected' : '' }}>{{ $p->code }} - {{ $p->name_en }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Status</label>
                    <select name="status" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500" required>
                        <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                        <option value="suspended" {{ old('status') === 'suspended' ? 'selected' : '' }}>Suspended</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Password</label>
                    <input type="password" name="password" class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent" required>
                </div>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="submit" class="px-5 py-2 text-sm font-bold text-emerald-900 bg-gold-400 rounded-lg hover:bg-gold-300 transition-colors">Create User</button>
                <a href="{{ route('admin.users.index') }}" class="px-5 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
