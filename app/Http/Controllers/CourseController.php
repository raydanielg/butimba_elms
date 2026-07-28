<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $degreeCourses = Course::where('category', 'Degree')->get();
        $diplomaCourses = Course::where('category', 'Diploma')->get();
        $certificateCourses = Course::where('category', 'Certificate')->get();

        return view('pages.courses', compact('degreeCourses', 'diplomaCourses', 'certificateCourses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return response()->json($course);
    }
}
