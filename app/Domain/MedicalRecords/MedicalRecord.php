<?php

namespace App\Domain\MedicalRecords;

class MedicalRecord
{
    protected string $patientName;
    protected string $recordDate;

    public function __construct(string $patientName, string $recordDate)
    {
        $this->patientName = $patientName;
        $this->recordDate = $recordDate;
    }

    public function getPatientName(): string
    {
        return $this->patientName;
    }

    public function getRecordDate(): string
    {
        return $this->recordDate;
    }

    public function getType(): string
    {
        return 'Medical Record';
    }
}