<?php

// Routes for the API

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\MedicalRecordController;
use App\Http\Controllers\Api\VitalSignController;

// Patient routes

Route::get('/patients', [PatientController::class, 'index']);
Route::post('/patients', [PatientController::class, 'store']);
Route::get('/patients/{id}', [PatientController::class, 'show']);
Route::put('/patients/{id}', [PatientController::class, 'update']);
Route::delete('/patients/{id}', [PatientController::class, 'destroy']);

// Doctor routes

Route::get('/doctors', [DoctorController::class, 'index']);
Route::post('/doctors', [DoctorController::class, 'store']);
Route::get('/doctors/{id}', [DoctorController::class, 'show']);
Route::put('/doctors/{id}', [DoctorController::class, 'update']);
Route::delete('/doctors/{id}', [DoctorController::class, 'destroy']);

// Appointment routes

Route::get('/appointments', [AppointmentController::class, 'index']);
Route::post('/appointments', [AppointmentController::class, 'store']);
Route::get('/appointments/{id}', [AppointmentController::class, 'show']);
Route::put('/appointments/{id}', [AppointmentController::class, 'update']);
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy']);

// Medical Record routes

Route::get('/medical-records', [MedicalRecordController::class, 'index']);
Route::post('/medical-records', [MedicalRecordController::class, 'store']);
Route::get('/medical-records/{id}', [MedicalRecordController::class, 'show']);
Route::put('/medical-records/{id}', [MedicalRecordController::class, 'update']);
Route::delete('/medical-records/{id}', [MedicalRecordController::class, 'destroy']);

// Vital Sign routes

Route::get('/vital-signs', [VitalSignController::class, 'index']);
Route::post('/vital-signs', [VitalSignController::class, 'store']);
Route::get('/vital-signs/{id}', [VitalSignController::class, 'show']);
Route::put('/vital-signs/{id}', [VitalSignController::class, 'update']);
Route::delete('/vital-signs/{id}', [VitalSignController::class, 'destroy']);