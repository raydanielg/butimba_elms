<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title_en', 'title_sw', 'body_en', 'body_sw', 'category', 'image'];
}
