<?php

namespace App\Domain\MedicalRecords;

class AppointmentRecord extends MedicalRecord
{
    private string $doctorName;
    private string $appointmentTime;

    public function __construct(
        string $patientName,
        string $recordDate,
        string $doctorName,
        string $appointmentTime
    ) {
        parent::__construct($patientName, $recordDate);

        $this->doctorName = $doctorName;
        $this->appointmentTime = $appointmentTime;
    }

    public function getDoctorName(): string
    {
        return $this->doctorName;
    }

    public function getAppointmentTime(): string
    {
        return $this->appointmentTime;
    }

    public function getType(): string
    {
        return 'Appointment';
    }
}