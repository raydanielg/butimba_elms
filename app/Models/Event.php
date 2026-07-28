<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title_en', 'title_sw', 'date', 'time', 'location_en', 'location_sw', 'description_en', 'description_sw'];

    protected $casts = [
        'date' => 'date',
    ];
}
