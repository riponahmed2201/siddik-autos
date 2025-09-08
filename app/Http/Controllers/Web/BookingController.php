<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BookingRequest;
use App\Models\Destination;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:50',
            'from_location' => 'required|string|max:255',
            'destination_id' => 'nullable|exists:destinations,id',
            'vehicle_type_id' => 'nullable|exists:vehicle_types,id',
            'journey_date' => 'nullable|date',
            'journey_time' => 'nullable',
            'passengers' => 'nullable|integer|min:1',
            'message' => 'nullable|string',
        ]);

        BookingRequest::create($validated + ['status' => 'pending']);
        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Your booking request has been submitted. We will contact you shortly.'
            ], 201);
        }
        return back()->with('success', 'Your booking request has been submitted. We will contact you shortly.');
    }
}
