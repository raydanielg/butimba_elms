<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['code', 'name_en', 'name_sw', 'description_en', 'description_sw'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
