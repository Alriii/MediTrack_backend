<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'doctor_name',
        'doctor_email',
        'doctor_password',
        'doctor_phone',
        'doctor_address',
        'doctor_city',
    ];

    public function appointments()
    {
    return $this->hasMany(Appointment::class);
    }

    public function medicalRecords()
    {
    return $this->hasMany(MedicalRecord::class);
    }

    public function vitalSigns()
    {
        return $this->hasMany(VitalSign::class);
    }
    
}