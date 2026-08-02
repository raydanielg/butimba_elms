<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->isAdmin()) {
            return $this->adminDashboard();
        }

        if ($user->isTeacher()) {
            return redirect()->route('teacher.dashboard');
        }

        return redirect()->route('student.dashboard');
    }

    public function adminDashboard()
    {
        $stats = [
            'applications' => \App\Models\Application::count(),
            'pending_applications' => \App\Models\Application::where('status', 'Pending')->count(),
            'accepted_applications' => \App\Models\Application::where('status', 'Accepted')->count(),
            'teachers' => \App\Models\User::where('role', 'teacher')->count(),
            'students' => \App\Models\User::where('role', 'user')->count(),
            'courses' => \App\Models\Course::count(),
            'active_courses' => \App\Models\Course::where('is_active', true)->count(),
            'programmes' => \App\Models\Programme::count(),
            'departments' => \App\Models\Department::count(),
            'payments_verified' => \App\Models\Payment::where('status', 'verified')->sum('amount'),
            'payments_pending' => \App\Models\Payment::where('status', 'pending')->count(),
            'enrollments' => \App\Models\Enrollment::where('status', 'active')->count(),
        ];

        $recentApplications = \App\Models\Application::latest()->take(5)->get();
        $recentPayments = \App\Models\Payment::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentApplications', 'recentPayments'));
    }
}
