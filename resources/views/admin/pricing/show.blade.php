@extends('admin.master')

@section('title', 'View Pricing')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Pricing Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.pricing.index') }}">Pricing</a></li>
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
                            <h5 class="card-title">Pricing Information</h5>
                            <div>
                                <a href="{{ route('admin.pricing.edit', $pricing) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.pricing.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="30%">ID:</th>
                                        <td>{{ $pricing->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vehicle Type:</th>
                                        <td>{{ $pricing->vehicleType->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Destination:</th>
                                        <td>{{ $pricing->destination->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>From Location:</th>
                                        <td>{{ $pricing->from_location }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td>
                                            <span class="fw-bold text-success fs-5">{{ number_format($pricing->price, 2) }} BDT</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>
                                            <span class="badge {{ $pricing->is_active ? 'bg-success' : 'bg-danger' }}">
                                                {{ $pricing->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Created:</th>
                                        <td>{{ $pricing->created_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated:</th>
                                        <td>{{ $pricing->updated_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6 class="card-title">Vehicle Details</h6>
                                        <p><strong>Name:</strong> {{ $pricing->vehicleType->name }}</p>
                                        <p><strong>Capacity:</strong> {{ $pricing->vehicleType->capacity }} passengers</p>
                                        <p><strong>Description:</strong> {{ $pricing->vehicleType->description ?: 'No description' }}</p>
                                    </div>
                                </div>
                                <div class="card bg-light mt-3">
                                    <div class="card-body">
                                        <h6 class="card-title">Destination Details</h6>
                                        <p><strong>Name:</strong> {{ $pricing->destination->name }}</p>
                                        <p><strong>Zone:</strong> {{ $pricing->destination->zone ?: 'No zone' }}</p>
                                        <p><strong>Description:</strong> {{ $pricing->destination->description ?: 'No description' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
