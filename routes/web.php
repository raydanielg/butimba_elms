<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
Route::get('/api/courses/{id}', [App\Http\Controllers\CourseController::class, 'show'])->name('api.courses.show');

Route::get('/admissions', function () {
    return view('pages.admissions');
})->name('admissions');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/api/posts/{id}', [App\Http\Controllers\NewsController::class, 'showPost'])->name('api.posts.show');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/e-library', function () {
    return view('pages.elibrary');
})->name('elibrary');

Auth::routes();

Route::post('/ajax/login', [App\Http\Controllers\Auth\LoginController::class, 'ajaxLogin'])->name('ajax.login');
Route::post('/ajax/register', [App\Http\Controllers\Auth\RegisterController::class, 'ajaxRegister'])->name('ajax.register');

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home')->middleware('auth');

Route::get('/api/visitor-stats', [App\Http\Controllers\VisitorController::class, 'stats'])->name('visitor.stats');

Route::get('/api/regions', [App\Http\Controllers\LocationController::class, 'regions'])->name('api.regions');
Route::get('/api/districts/{region}', [App\Http\Controllers\LocationController::class, 'districts'])->name('api.districts');
Route::get('/api/wards/{district}', [App\Http\Controllers\LocationController::class, 'wards'])->name('api.wards');

Route::get('/apply', [App\Http\Controllers\ApplicationController::class, 'showForm'])->name('apply.form');
Route::post('/apply/preview', [App\Http\Controllers\ApplicationController::class, 'preview'])->name('apply.preview');
Route::post('/apply', [App\Http\Controllers\ApplicationController::class, 'submit'])->name('apply.submit');
Route::get('/apply/download/{id}', [App\Http\Controllers\ApplicationController::class, 'download'])->name('apply.download');

Route::get('/track', [App\Http\Controllers\ApplicationController::class, 'trackForm'])->name('track.form');
Route::get('/track/{code}', [App\Http\Controllers\ApplicationController::class, 'trackResult'])->name('track.result');

// ==================== ADMIN ROUTES ====================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'adminDashboard'])->name('dashboard');

    // Users
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::post('/users/{user}/reset-password', [App\Http\Controllers\Admin\UserController::class, 'resetPassword'])->name('users.resetPassword');

    // Courses
    Route::resource('courses', App\Http\Controllers\Admin\CourseController::class);

    // Applications
    Route::get('/applications', [App\Http\Controllers\Admin\ApplicationController::class, 'index'])->name('applications.index');
    Route::get('/applications/{application}', [App\Http\Controllers\Admin\ApplicationController::class, 'show'])->name('applications.show');
    Route::put('/applications/{application}/status', [App\Http\Controllers\Admin\ApplicationController::class, 'updateStatus'])->name('applications.updateStatus');

    // Payments & Fees
    Route::get('/payments', [App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('payments.index');
    Route::post('/payments/{payment}/verify', [App\Http\Controllers\Admin\PaymentController::class, 'verify'])->name('payments.verify');
    Route::post('/payments/{payment}/reject', [App\Http\Controllers\Admin\PaymentController::class, 'reject'])->name('payments.reject');
    Route::get('/payments/fees', [App\Http\Controllers\Admin\PaymentController::class, 'feeStructures'])->name('payments.fees');
    Route::post('/payments/fees', [App\Http\Controllers\Admin\PaymentController::class, 'storeFee'])->name('payments.storeFee');
    Route::delete('/payments/fees/{fee}', [App\Http\Controllers\Admin\PaymentController::class, 'destroyFee'])->name('payments.destroyFee');

    // Announcements
    Route::resource('announcements', App\Http\Controllers\Admin\AnnouncementController::class)->except(['show', 'edit', 'update']);
});

// ==================== TEACHER ROUTES ====================
Route::middleware(['auth', 'role:teacher'])->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/dashboard', function () {
        return view('teacher.dashboard');
    })->name('dashboard');

    Route::get('/courses', function () {
        $courses = auth()->user()->taughtCourses()->with('enrolledStudents')->get();
        return view('teacher.courses.index', compact('courses'));
    })->name('courses.index');
});

// ==================== STUDENT ROUTES ====================
Route::middleware(['auth', 'role:user'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
        $courses = $user->courses()->where('is_active', true)->get();
        $announcements = \App\Models\Announcement::where('is_active', true)->latest()->take(5)->get();
        return view('student.dashboard', compact('user', 'courses', 'announcements'));
    })->name('dashboard');

    Route::get('/courses', function () {
        $courses = auth()->user()->courses()->where('is_active', true)->get();
        return view('student.courses.index', compact('courses'));
    })->name('courses.index');

    Route::get('/status', function () {
        $user = auth()->user()->load('payments', 'results.course');
        return view('student.status', compact('user'));
    })->name('status');
});
