<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Programme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('registration_number', 'like', "%{$search}%");
            });
        }

        $users = $query->latest()->paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $programmes = Programme::all();
        return view('admin.users.create', compact('programmes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|string|max:20|unique:users',
            'role' => 'required|in:admin,teacher,user',
            'programme_id' => 'nullable|exists:programmes,id',
            'status' => 'required|in:active,inactive,suspended',
            'password' => 'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        if ($validated['role'] === 'user') {
            $validated['registration_number'] = 'BTC/' . date('Y') . '/' . Str::random(6);
        }

        User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        $user->load('programme', 'courses', 'payments', 'results', 'submissions');
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $programmes = Programme::all();
        return view('admin.users.edit', compact('user', 'programmes'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:20|unique:users,phone,' . $user->id,
            'role' => 'required|in:admin,teacher,user',
            'programme_id' => 'nullable|exists:programmes,id',
            'status' => 'required|in:active,inactive,suspended',
            'password' => 'nullable|string|min:8',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->with('error', 'You cannot delete your own account.');
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }

    public function resetPassword(User $user)
    {
        $tempPassword = Str::random(12);
        $user->update(['password' => Hash::make($tempPassword)]);

        return back()->with('success', "Password reset. Temporary password: {$tempPassword}");
    }
}
