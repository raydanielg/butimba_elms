<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Enrollment extends Pivot
{
    protected $table = 'enrollments';

    protected $fillable = ['user_id', 'course_id', 'status', 'enrolled_at', 'completed_at'];

    protected $casts = [
        'enrolled_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public $timestamps = true;
}
