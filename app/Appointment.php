<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=['name', 'nrc','appointment_date', 'appointment_time', 'phone_no','address', 'specialist_id', 'email', 'message', 'file_name', 'file_path'];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

}
