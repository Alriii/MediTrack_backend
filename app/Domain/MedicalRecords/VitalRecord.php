<?php

namespace App\Domain\MedicalRecords;

class VitalRecord extends MedicalRecord
{
    private string $bloodPressure;
    private string $heartRate;

    public function __construct(
        string $patientName,
        string $recordDate,
        string $bloodPressure,
        string $heartRate
    ) {
        parent::__construct($patientName, $recordDate);

        $this->bloodPressure = $bloodPressure;
        $this->heartRate = $heartRate;
    }

    public function getBloodPressure(): string
    {
        return $this->bloodPressure;
    }

    public function getHeartRate(): string
    {
        return $this->heartRate;
    }

    public function getType(): string
    {
        return 'Vital';
    }
}