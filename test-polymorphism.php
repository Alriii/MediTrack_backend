<?php

require __DIR__ . '/vendor/autoload.php';

use App\Domain\MedicalRecords\MedicalRecord;
use App\Domain\MedicalRecords\MedicationRecord;
use App\Domain\MedicalRecords\AppointmentRecord;
use App\Domain\MedicalRecords\VitalRecord;

$records = [
    new MedicationRecord('John', '2026-09-13', 'Paracetamol', '500mg'),
    new AppointmentRecord('Maria', '2026-09-14', 'Dr. Santos', '10:00 AM'),
    new VitalRecord('Ken', '2026-09-15', '120/80', '72 BPM'),
];

foreach ($records as $record) {
    echo $record->getType() . PHP_EOL;
}