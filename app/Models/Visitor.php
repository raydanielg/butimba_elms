<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'ip_address',
        'user_agent',
        'page_visited',
        'referrer',
        'visit_date',
    ];

    protected $casts = [
        'visit_date' => 'date',
    ];

    public $timestamps = true;
}
