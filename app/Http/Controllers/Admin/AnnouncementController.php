<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Course;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::with(['user', 'course'])->latest()->paginate(15);
        return view('admin.announcements.index', compact('announcements'));
    }

    public function create()
    {
        $courses = Course::where('is_active', true)->get();
        return view('admin.announcements.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_sw' => 'required|string|max:255',
            'body_en' => 'required|string',
            'body_sw' => 'nullable|string',
            'scope' => 'required|in:college,course',
            'course_id' => 'nullable|exists:courses,id',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['is_active'] = true;

        if ($validated['scope'] === 'college') {
            $validated['course_id'] = null;
        }

        Announcement::create($validated);

        return redirect()->route('admin.announcements.index')->with('success', 'Announcement created.');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return back()->with('success', 'Announcement deleted.');
    }
}
