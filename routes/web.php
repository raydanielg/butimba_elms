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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
