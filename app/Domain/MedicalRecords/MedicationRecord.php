<?php

namespace App\Domain\MedicalRecords;

class MedicationRecord extends MedicalRecord
{
    private string $medicineName;
    private string $dosage;

    public function __construct(
        string $patientName,
        string $recordDate,
        string $medicineName,
        string $dosage
    ) {
        parent::__construct($patientName, $recordDate);

        $this->medicineName = $medicineName;
        $this->dosage = $dosage;
    }

    public function getMedicineName(): string
    {
        return $this->medicineName;
    }

    public function getDosage(): string
    {
        return $this->dosage;
    }

    public function getType(): string
    {
        return 'Medication';
    }
}