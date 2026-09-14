<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return Appointment::with(['patient', 'doctor'])->get();
    }

    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());

        return $appointment->load(['patient', 'doctor']);
    }

    public function show($id)
    {
        return Appointment::with(['patient', 'doctor'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update($request->all());

        return $appointment->load(['patient', 'doctor']);
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->delete();

        return response()->noContent();
    }
}