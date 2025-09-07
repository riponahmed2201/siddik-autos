@extends('admin.master')

@section('title', 'Booking Details')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Booking Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.bookings.index') }}">Booking Requests</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title">Request Information</h5>
                            <div>
                                <a href="{{ route('admin.bookings.edit', $booking) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
                                <form action="{{ route('admin.bookings.destroy',$booking) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this booking?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr><th width="35%">ID</th><td>{{ $booking->id }}</td></tr>
                                    <tr><th>Name</th><td>{{ $booking->name }}</td></tr>
                                    <tr><th>Email</th><td>{{ $booking->email ?: '-' }}</td></tr>
                                    <tr><th>Phone</th><td>{{ $booking->phone }}</td></tr>
                                    <tr><th>From</th><td>{{ $booking->from_location }}</td></tr>
                                    <tr><th>Destination</th><td>{{ optional($booking->destination)->name ?: '-' }}</td></tr>
                                    <tr><th>Vehicle</th><td>{{ optional($booking->vehicleType)->name ?: '-' }}</td></tr>
                                    <tr><th>Passengers</th><td>{{ $booking->passengers }}</td></tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr><th>Journey Date</th><td>{{ $booking->journey_date ? $booking->journey_date->format('M d, Y') : '-' }}</td></tr>
                                    <tr><th>Journey Time</th><td>{{ $booking->journey_time ? \Carbon\Carbon::parse($booking->journey_time)->format('H:i') : '-' }}</td></tr>
                                    <tr><th>Status</th><td><span class="badge @class(['bg-warning'=>$booking->status==='pending','bg-success'=>$booking->status==='confirmed','bg-danger'=>$booking->status==='cancelled'])">{{ ucfirst($booking->status) }}</span></td></tr>
                                    <tr><th>Created</th><td>{{ $booking->created_at->format('M d, Y H:i') }}</td></tr>
                                    <tr><th>Updated</th><td>{{ $booking->updated_at->format('M d, Y H:i') }}</td></tr>
                                </table>
                            </div>
                        </div>

                        <div class="mt-3">
                            <h6>Message</h6>
                            <p>{{ $booking->message ?: 'No message provided.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


