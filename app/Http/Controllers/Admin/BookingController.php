<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingRequest;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = BookingRequest::with(['vehicleType','destination'])
            ->latest()->paginate(20);
        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(BookingRequest $booking)
    {
        $booking->load(['vehicleType','destination']);
        return view('admin.bookings.show', compact('booking'));
    }

    public function edit(BookingRequest $booking)
    {
        $booking->load(['vehicleType','destination']);
        $vehicleTypes = \App\Models\VehicleType::where('is_active', true)->get();
        $destinations = \App\Models\Destination::where('is_active', true)->get();
        return view('admin.bookings.edit', compact('booking','vehicleTypes','destinations'));
    }

    public function update(Request $request, BookingRequest $booking)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'from_location' => 'nullable|string|max:255',
            'destination_id' => 'nullable|exists:destinations,id',
            'vehicle_type_id' => 'nullable|exists:vehicle_types,id',
            'journey_date' => 'nullable|date',
            'journey_time' => 'nullable',
            'passengers' => 'nullable|integer|min:1',
            'message' => 'nullable|string',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $booking->update($validated);

        return redirect()->route('admin.bookings.show', $booking)->with('success', 'Booking updated successfully.');
    }

    public function destroy(BookingRequest $booking)
    {
        $booking->delete();
        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
