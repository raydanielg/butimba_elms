<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'course_id', 'topic_id', 'title_en', 'title_sw',
        'instructions_en', 'instructions_sw', 'max_marks',
        'deadline', 'timer_minutes', 'allow_late_submission', 'is_published'
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
