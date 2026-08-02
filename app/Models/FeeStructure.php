<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    protected $fillable = [
        'programme_id', 'fee_type', 'fee_type_sw', 'amount',
        'description_en', 'description_sw', 'is_active'
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
