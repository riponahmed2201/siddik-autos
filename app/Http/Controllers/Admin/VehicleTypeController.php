<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleType;
use App\Models\VehicleCategory;
use App\Models\VehicleFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class VehicleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicleTypes = VehicleType::with(['category', 'features'])->paginate(10);
        return view('admin.vehicle-types.index', compact('vehicleTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = VehicleCategory::where('is_active', true)->get();
        $features = VehicleFeature::where('is_active', true)->get();
        return view('admin.vehicle-types.create', compact('categories', 'features'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'capacity' => 'required|integer|min:1',
            'category_id' => 'nullable|exists:vehicle_categories,id',
            'features' => 'nullable|array',
            'features.*' => 'exists:vehicle_features,id',
            'image' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'capacity' => $request->capacity,
            'category_id' => $request->category_id,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('vehicles', 'public');
        }

        $vehicleType = VehicleType::create($data);

        // Sync features
        if ($request->has('features')) {
            $vehicleType->features()->sync($request->features);
        }

        return redirect()->route('admin.vehicle-types.index')
            ->with('success', 'Vehicle type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleType $vehicleType)
    {
        $vehicleType->load(['category', 'features']);
        return view('admin.vehicle-types.show', compact('vehicleType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleType $vehicleType)
    {
        $categories = VehicleCategory::where('is_active', true)->get();
        $features = VehicleFeature::where('is_active', true)->get();
        $vehicleType->load(['category', 'features']);
        return view('admin.vehicle-types.edit', compact('vehicleType', 'categories', 'features'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleType $vehicleType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'capacity' => 'required|integer|min:1',
            'category_id' => 'nullable|exists:vehicle_categories,id',
            'features' => 'nullable|array',
            'features.*' => 'exists:vehicle_features,id',
            'image' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'capacity' => $request->capacity,
            'category_id' => $request->category_id,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            if ($vehicleType->image_path && Storage::disk('public')->exists($vehicleType->image_path)) {
                Storage::disk('public')->delete($vehicleType->image_path);
            }
            $data['image_path'] = $request->file('image')->store('vehicles', 'public');
        }

        $vehicleType->update($data);

        // Sync features
        if ($request->has('features')) {
            $vehicleType->features()->sync($request->features);
        } else {
            $vehicleType->features()->detach();
        }

        return redirect()->route('admin.vehicle-types.index')
            ->with('success', 'Vehicle type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleType $vehicleType)
    {
        $vehicleType->delete();

        return redirect()->route('admin.vehicle-types.index')
            ->with('success', 'Vehicle type deleted successfully.');
    }
}
