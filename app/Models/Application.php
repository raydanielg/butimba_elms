<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Application extends Model
{
    protected $fillable = [
        'tracking_code',
        'email',
        'full_name',
        'gender',
        'dob',
        'region',
        'district',
        'ward',
        'address',
        'phone',
        'relative_phone',
        'employment_status',
        'previous_profession',
        'college_name',
        'graduation_year',
        'certificate_number',
        'applied_course',
        'declaration_confirmed',
        'status',
    ];

    protected $casts = [
        'dob' => 'date',
        'declaration_confirmed' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function ($application) {
            $application->tracking_code = $application->generateTrackingCode();
        });
    }

    private function generateTrackingCode(): string
    {
        $code = 'BTC-' . strtoupper(Str::random(8));
        while (self::where('tracking_code', $code)->exists()) {
            $code = 'BTC-' . strtoupper(Str::random(8));
        }
        return $code;
    }
}

