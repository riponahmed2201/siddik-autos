@extends('admin.master')

@section('title', 'Create Booking')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.bookings.index') }}">Booking Requests</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Booking Request</h5>

                            <form action="{{ route('admin.bookings.store') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-4">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Vehicle Type</label>
                                    <select name="vehicle_type_id" class="form-select">
                                        <option value="">Select Vehicle</option>
                                        @foreach($vehicleTypes as $vt)
                                            <option value="{{ $vt->id }}">{{ $vt->name }} ({{ $vt->capacity }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Destination</label>
                                    <select name="destination_id" class="form-select">
                                        <option value="">Select Destination</option>
                                        @foreach($destinations as $dest)
                                            <option value="{{ $dest->id }}">{{ $dest->name }} {{ $dest->zone ? '(' . $dest->zone . ')' : '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">From Location <span class="text-danger">*</span></label>
                                    <input type="text" name="from_location" class="form-control" value="Dhaka Airport" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Journey Date</label>
                                    <input type="date" name="journey_date" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Journey Time</label>
                                    <input type="time" name="journey_time" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Passengers</label>
                                    <input type="number" name="passengers" class="form-control" min="1" value="1">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" rows="3" class="form-control"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Create Booking</button>
                                    <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


