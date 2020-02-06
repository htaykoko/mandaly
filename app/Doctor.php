<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'degree', 'mobile', 'licence_no', 'image_name', 'image_path', 'licence_expired_date', 'age', 'start_time', 'end_time', 'experience', 'specialist_id', 'created_by', 'updated_by'];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
