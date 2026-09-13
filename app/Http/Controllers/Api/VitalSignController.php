<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VitalSign;
use Illuminate\Http\Request;

class VitalSignController extends Controller
{
    public function index()
    {
        return VitalSign::all();
    }

    public function store(Request $request)
    {
        $vitalSign = VitalSign::create($request->all());

        return $vitalSign;
    }

    public function show($id)
    {
        return VitalSign::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $vitalSign = VitalSign::findOrFail($id);

        $vitalSign->update($request->all());

        return $vitalSign;
    }

    public function destroy($id)
    {
        $vitalSign = VitalSign::findOrFail($id);

        $vitalSign->delete();

        return response()->noContent();
    }
}