<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Programme;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::with(['programme', 'department', 'teacher']);

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name_en', 'like', "%{$search}%")
                  ->orWhere('name_sw', 'like', "%{$search}%")
                  ->orWhere('code', 'like', "%{$search}%");
            });
        }

        $courses = $query->latest()->paginate(15);

        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $programmes = Programme::all();
        $departments = Department::all();
        $teachers = User::where('role', 'teacher')->where('status', 'active')->get();
        return view('admin.courses.create', compact('programmes', 'departments', 'teachers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'nullable|string|max:20|unique:courses,code',
            'programme_id' => 'nullable|exists:programmes,id',
            'department_id' => 'nullable|exists:departments,id',
            'teacher_id' => 'nullable|exists:users,id',
            'name_en' => 'required|string|max:255',
            'name_sw' => 'required|string|max:255',
            'category' => 'required|in:Degree,Diploma,Certificate',
            'type' => 'required|in:Core,Subject,Practical',
            'medium' => 'required|in:Kiswahili,Kiswahili & English,English',
            'description_en' => 'required|string',
            'description_sw' => 'required|string',
            'duration_en' => 'required|string|max:255',
            'duration_sw' => 'required|string|max:255',
            'requirements_en' => 'nullable|string',
            'requirements_sw' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        Course::create($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    public function show(Course $course)
    {
        $course->load(['programme', 'department', 'teacher', 'topics', 'enrolledStudents']);
        return view('admin.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $programmes = Programme::all();
        $departments = Department::all();
        $teachers = User::where('role', 'teacher')->where('status', 'active')->get();
        return view('admin.courses.edit', compact('course', 'programmes', 'departments', 'teachers'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'code' => 'nullable|string|max:20|unique:courses,code,' . $course->id,
            'programme_id' => 'nullable|exists:programmes,id',
            'department_id' => 'nullable|exists:departments,id',
            'teacher_id' => 'nullable|exists:users,id',
            'name_en' => 'required|string|max:255',
            'name_sw' => 'required|string|max:255',
            'category' => 'required|in:Degree,Diploma,Certificate',
            'type' => 'required|in:Core,Subject,Practical',
            'medium' => 'required|in:Kiswahili,Kiswahili & English,English',
            'description_en' => 'required|string',
            'description_sw' => 'required|string',
            'duration_en' => 'required|string|max:255',
            'duration_sw' => 'required|string|max:255',
            'requirements_en' => 'nullable|string',
            'requirements_sw' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $course->update($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}
