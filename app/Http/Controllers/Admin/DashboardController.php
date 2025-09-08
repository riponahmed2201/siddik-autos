<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = BookingRequest::with(['vehicleType', 'destination'])
            ->latest()->paginate(20);

        return view('admin.dashboard', compact('bookings'));
    }
}
