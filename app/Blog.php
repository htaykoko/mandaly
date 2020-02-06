<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['date', 'title', 'body', 'title_image', 'specialist_id', 'path', 'view_count', 'file_name', 'created_by', 'updated_by'];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
