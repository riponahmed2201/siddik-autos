<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleFeature;
use Illuminate\Http\Request;

class VehicleFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = VehicleFeature::paginate(10);
        return view('admin.vehicle-features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vehicle-features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:10',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        VehicleFeature::create($data);

        return redirect()->route('admin.vehicle-features.index')
            ->with('success', 'Vehicle feature created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleFeature $vehicleFeature)
    {
        return view('admin.vehicle-features.show', compact('vehicleFeature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleFeature $vehicleFeature)
    {
        return view('admin.vehicle-features.edit', compact('vehicleFeature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleFeature $vehicleFeature)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:10',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        $vehicleFeature->update($data);

        return redirect()->route('admin.vehicle-features.index')
            ->with('success', 'Vehicle feature updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleFeature $vehicleFeature)
    {
        $vehicleFeature->delete();

        return redirect()->route('admin.vehicle-features.index')
            ->with('success', 'Vehicle feature deleted successfully.');
    }
}
