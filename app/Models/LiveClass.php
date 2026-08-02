<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LiveClass extends Model
{
    protected $fillable = [
        'course_id', 'user_id', 'title_en', 'title_sw',
        'description_en', 'description_sw', 'meeting_link',
        'platform', 'scheduled_at', 'duration_minutes', 'is_completed'
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
