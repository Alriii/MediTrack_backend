<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'patient_name',
        'patient_email',
        'patient_password',
        'patient_phone',
        'patient_address',
        'patient_city',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}