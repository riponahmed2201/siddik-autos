@extends('admin.master')

@section('title', 'View Vehicle Type')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Vehicle Type Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.vehicle-types.index') }}">Vehicle Types</a></li>
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
                            <h5 class="card-title">Vehicle Type Information</h5>
                            <div>
                                <a href="{{ route('admin.vehicle-types.edit', $vehicleType) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.vehicle-types.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="30%">ID:</th>
                                        <td>{{ $vehicleType->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $vehicleType->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Slug:</th>
                                        <td>{{ $vehicleType->slug }}</td>
                                    </tr>
                                    <tr>
                                        <th>Capacity:</th>
                                        <td>{{ $vehicleType->capacity }} passengers</td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>
                                            <span class="badge {{ $vehicleType->is_active ? 'bg-success' : 'bg-danger' }}">
                                                {{ $vehicleType->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Created:</th>
                                        <td>{{ $vehicleType->created_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated:</th>
                                        <td>{{ $vehicleType->updated_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h6>Description:</h6>
                                <p>{{ $vehicleType->description ?: 'No description provided.' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
