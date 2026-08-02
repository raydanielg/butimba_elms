<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Application extends Model
{
    protected $fillable = [
        'tracking_code',
        'user_id',
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
        'payment_slip_path',
        'status',
        'admin_notes',
        'reviewed_at',
        'reviewed_by',
    ];

    protected $casts = [
        'dob' => 'date',
        'declaration_confirmed' => 'boolean',
        'reviewed_at' => 'datetime',
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

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

