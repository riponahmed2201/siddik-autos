<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\VehicleType;
use App\Models\Destination;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricing = Pricing::with(['vehicleType', 'destination'])
            ->paginate(20);
        return view('admin.pricing.index', compact('pricing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicleTypes = VehicleType::where('is_active', true)->get();
        $destinations = Destination::where('is_active', true)->get();
        return view('admin.pricing.create', compact('vehicleTypes', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
            'destination_id' => 'required|exists:destinations,id',
            'price' => 'required|numeric|min:0',
            'from_location' => 'required|string|max:255',
        ]);

        Pricing::create([
            'vehicle_type_id' => $request->vehicle_type_id,
            'destination_id' => $request->destination_id,
            'price' => $request->price,
            'from_location' => $request->from_location,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.pricing.index')
            ->with('success', 'Pricing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pricing $pricing)
    {
        $pricing->load(['vehicleType', 'destination']);
        return view('admin.pricing.show', compact('pricing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing $pricing)
    {
        $vehicleTypes = VehicleType::where('is_active', true)->get();
        $destinations = Destination::where('is_active', true)->get();
        return view('admin.pricing.edit', compact('pricing', 'vehicleTypes', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pricing $pricing)
    {
        $request->validate([
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
            'destination_id' => 'required|exists:destinations,id',
            'price' => 'required|numeric|min:0',
            'from_location' => 'required|string|max:255',
        ]);

        $pricing->update([
            'vehicle_type_id' => $request->vehicle_type_id,
            'destination_id' => $request->destination_id,
            'price' => $request->price,
            'from_location' => $request->from_location,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.pricing.index')
            ->with('success', 'Pricing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();

        return redirect()->route('admin.pricing.index')
            ->with('success', 'Pricing deleted successfully.');
    }
}
