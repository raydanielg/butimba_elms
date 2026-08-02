<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = ['code', 'name_en', 'name_sw', 'stream', 'medium', 'description_en', 'description_sw'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function students()
    {
        return $this->hasMany(User::class);
    }

    public function feeStructures()
    {
        return $this->hasMany(FeeStructure::class);
    }
}
