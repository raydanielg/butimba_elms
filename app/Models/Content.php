<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['topic_id', 'type', 'title_en', 'title_sw', 'file_path', 'external_url', 'sort_order'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
