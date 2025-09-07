@extends('admin.master')

@section('title', 'Edit Booking')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Booking</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.bookings.index') }}">Booking Requests</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Booking Information</h5>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.bookings.update', $booking) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $booking->name) }}">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $booking->phone) }}">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $booking->email) }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Vehicle Type</label>
                                    <select name="vehicle_type_id" class="form-select">
                                        <option value="">Select Vehicle</option>
                                        @foreach($vehicleTypes as $vt)
                                            <option value="{{ $vt->id }}" @selected(old('vehicle_type_id', $booking->vehicle_type_id)==$vt->id)>{{ $vt->name }} ({{ $vt->capacity }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Destination</label>
                                    <select name="destination_id" class="form-select">
                                        <option value="">Select Destination</option>
                                        @foreach($destinations as $dest)
                                            <option value="{{ $dest->id }}" @selected(old('destination_id', $booking->destination_id)==$dest->id)>{{ $dest->name }} {{ $dest->zone ? '(' . $dest->zone . ')' : '' }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">From Location</label>
                                    <input type="text" name="from_location" class="form-control" value="{{ old('from_location', $booking->from_location) }}">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Journey Date</label>
                                    <input type="date" name="journey_date" class="form-control" value="{{ old('journey_date', optional($booking->journey_date)->format('Y-m-d')) }}">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Journey Time</label>
                                    <input type="time" name="journey_time" class="form-control" value="{{ old('journey_time', $booking->journey_time ? \Carbon\Carbon::parse($booking->journey_time)->format('H:i') : '') }}">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Passengers</label>
                                    <input type="number" name="passengers" min="1" class="form-control" value="{{ old('passengers', $booking->passengers) }}">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        @foreach(['pending'=>'Pending','confirmed'=>'Confirmed','cancelled'=>'Cancelled'] as $k=>$v)
                                            <option value="{{ $k }}" @selected(old('status', $booking->status)===$k)>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" rows="3" class="form-control">{{ old('message', $booking->message) }}</textarea>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary">Update Booking</button>
                                <a href="{{ route('admin.bookings.show', $booking) }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


