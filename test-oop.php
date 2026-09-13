<?php

require __DIR__ . '/vendor/autoload.php';

use App\Domain\MedicalRecords\MedicalRecord;
use App\Domain\MedicalRecords\MedicationRecord;
use App\Domain\MedicalRecords\AppointmentRecord;
use App\Domain\MedicalRecords\VitalRecord;

$medication = new MedicationRecord(
    'John',
    '2026-09-13',
    'Paracetamol',
    '500mg'
);

$appointment = new AppointmentRecord(
    'Maria',
    '2026-09-14',
    'Dr. Santos',
    '10:00 AM'
);

$vital = new VitalRecord(
    'Ken',
    '2026-09-15',
    '120/80',
    '72 BPM'
);

echo $medication->getType() . PHP_EOL;
echo $medication->getPatientName() . PHP_EOL;
echo $medication->getMedicineName() . PHP_EOL;
echo $medication->getDosage() . PHP_EOL;

echo PHP_EOL;

echo $appointment->getType() . PHP_EOL;
echo $appointment->getPatientName() . PHP_EOL;
echo $appointment->getDoctorName() . PHP_EOL;
echo $appointment->getAppointmentTime() . PHP_EOL;

echo PHP_EOL;

echo $vital->getType() . PHP_EOL;
echo $vital->getPatientName() . PHP_EOL;
echo $vital->getBloodPressure() . PHP_EOL;
echo $vital->getHeartRate() . PHP_EOL;