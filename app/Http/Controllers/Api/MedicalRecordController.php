<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        return MedicalRecord::all();
    }

    public function store(Request $request)
    {
        $medicalRecord = MedicalRecord::create($request->all());

        return $medicalRecord;
    }

    public function show($id)
    {
        return MedicalRecord::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $medicalRecord = MedicalRecord::findOrFail($id);

        $medicalRecord->update($request->all());

        return $medicalRecord;
    }

    public function destroy($id)
    {
        $medicalRecord = MedicalRecord::findOrFail($id);

        $medicalRecord->delete();

        return response()->noContent();
    }
}