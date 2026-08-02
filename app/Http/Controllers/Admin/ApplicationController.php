<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $query = Application::query();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('tracking_code', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        $applications = $query->latest()->paginate(15);

        $stats = [
            'total' => Application::count(),
            'pending' => Application::where('status', 'Pending')->count(),
            'accepted' => Application::where('status', 'Accepted')->count(),
            'rejected' => Application::where('status', 'Rejected')->count(),
        ];

        return view('admin.applications.index', compact('applications', 'stats'));
    }

    public function show(Application $application)
    {
        $application->load('reviewer');
        return view('admin.applications.show', compact('application'));
    }

    public function updateStatus(Request $request, Application $application)
    {
        $validated = $request->validate([
            'status' => 'required|in:Pending,Under Review,Accepted,Rejected',
            'admin_notes' => 'nullable|string',
        ]);

        $validated['reviewed_at'] = now();
        $validated['reviewed_by'] = auth()->id();

        $application->update($validated);

        if ($validated['status'] === 'Accepted') {
            $existingUser = User::where('email', $application->email)->first();

            if (!$existingUser) {
                $tempPassword = Str::random(12);
                $user = User::create([
                    'name' => $application->full_name,
                    'email' => $application->email,
                    'phone' => $application->phone,
                    'role' => 'user',
                    'status' => 'active',
                    'password' => Hash::make($tempPassword),
                    'registration_number' => 'BTC/' . date('Y') . '/' . Str::random(6),
                ]);

                $application->update(['user_id' => $user->id]);
            }
        }

        return redirect()->route('admin.applications.index')->with('success', 'Application status updated.');
    }
}
