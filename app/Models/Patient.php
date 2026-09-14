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

    protected $hidden = [
        'patient_password',
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