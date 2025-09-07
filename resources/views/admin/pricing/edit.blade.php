@extends('admin.master')

@section('title', 'Edit Pricing')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Pricing</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.pricing.index') }}">Pricing</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pricing Information</h5>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.pricing.update', $pricing) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="vehicle_type_id" class="col-sm-2 col-form-label">Vehicle Type <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="vehicle_type_id" name="vehicle_type_id" required>
                                        <option value="">Select Vehicle Type</option>
                                        @foreach($vehicleTypes as $vehicleType)
                                            <option value="{{ $vehicleType->id }}" {{ old('vehicle_type_id', $pricing->vehicle_type_id) == $vehicleType->id ? 'selected' : '' }}>
                                                {{ $vehicleType->name }} ({{ $vehicleType->capacity }} seats)
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="destination_id" class="col-sm-2 col-form-label">Destination <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="destination_id" name="destination_id" required>
                                        <option value="">Select Destination</option>
                                        @foreach($destinations as $destination)
                                            <option value="{{ $destination->id }}" {{ old('destination_id', $pricing->destination_id) == $destination->id ? 'selected' : '' }}>
                                                {{ $destination->name }} {{ $destination->zone ? '(' . $destination->zone . ')' : '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="from_location" class="col-sm-2 col-form-label">From Location <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="from_location" name="from_location" value="{{ old('from_location', $pricing->from_location) }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-sm-2 col-form-label">Price (BDT) <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $pricing->price) }}" min="0" step="0.01" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $pricing->is_active) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">
                                            Active
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update Pricing</button>
                                    <a href="{{ route('admin.pricing.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
