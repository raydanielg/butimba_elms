<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code',
        'programme_id',
        'department_id',
        'teacher_id',
        'name_en',
        'name_sw',
        'category',
        'type',
        'medium',
        'description_en',
        'description_sw',
        'duration_en',
        'duration_sw',
        'requirements_en',
        'requirements_sw',
        'is_active',
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class)->orderBy('sort_order');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function enrolledStudents()
    {
        return $this->belongsToMany(User::class, 'enrollments')
            ->using(Enrollment::class)
            ->withPivot(['status', 'enrolled_at', 'completed_at'])
            ->withTimestamps();
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function liveClasses()
    {
        return $this->hasMany(LiveClass::class);
    }

    public function forumThreads()
    {
        return $this->hasMany(ForumThread::class);
    }
}
