<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorDataController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'voltage1' => 'required|numeric',
            'current1' => 'required|numeric',
            'power1' => 'required|numeric',
            'energy1' => 'required|numeric',
            'frequency1' => 'required|numeric',
            'pf1' => 'required|numeric',
            'voltage2' => 'required|numeric',
            'current2' => 'required|numeric',
            'power2' => 'required|numeric',
            'energy2' => 'required|numeric',
            'frequency2' => 'required|numeric',
            'pf2' => 'required|numeric',
            'voltage3' => 'required|numeric',
            'current3' => 'required|numeric',
            'power3' => 'required|numeric',
            'energy3' => 'required|numeric',
            'frequency3' => 'required|numeric',
            'pf3' => 'required|numeric',
        ]);

        SensorData::create($data);

        return response()->json(['message' => 'Data inserted successfully']);
    }
}
