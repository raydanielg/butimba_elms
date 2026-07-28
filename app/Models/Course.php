<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name_en',
        'name_sw',
        'category',
        'description_en',
        'description_sw',
        'duration_en',
        'duration_sw',
        'requirements_en',
        'requirements_sw',
    ];
}
