@extends('admin.master')

@section('title', 'View Vehicle Type')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>View Vehicle Type</h1>
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
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="card-title">Vehicle Type Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.vehicle-types.edit', $vehicleType) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.vehicle-types.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    @if($vehicleType->image_path)
                                        <img src="{{ asset('storage/' . $vehicleType->image_path) }}"
                                             alt="{{ $vehicleType->name }}"
                                             class="img-fluid rounded mb-3"
                                             style="max-height: 300px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center mb-3"
                                             style="height: 300px;">
                                            <div class="text-center">
                                                <i class="bi bi-image text-muted" style="font-size: 4rem;"></i>
                                                <p class="text-muted mt-2">No Image</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Vehicle Name:</label>
                                    <p class="fs-5">{{ $vehicleType->name }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Slug:</label>
                                    <p><code>{{ $vehicleType->slug }}</code></p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Capacity:</label>
                                            <p class="fs-5">{{ $vehicleType->capacity }} Seats</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Status:</label>
                                            <span class="badge {{ $vehicleType->is_active ? 'bg-success' : 'bg-danger' }} fs-6">
                                                {{ $vehicleType->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                @if($vehicleType->category)
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Category:</label>
                                        <span class="badge bg-info fs-6">
                                            {{ $vehicleType->category->icon }} {{ $vehicleType->category->name }}
                                        </span>
                                    </div>
                                @endif

                                @if($vehicleType->description)
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Description:</label>
                                        <p>{{ $vehicleType->description }}</p>
                                    </div>
                                @endif

                                @if($vehicleType->features->count() > 0)
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Features:</label>
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach($vehicleType->features as $feature)
                                                <span class="badge bg-secondary">{{ $feature->icon }} {{ $feature->name }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Created:</label>
                                            <p class="text-muted mb-0">{{ $vehicleType->created_at->format('M d, Y \a\t g:i A') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Last Updated:</label>
                                            <p class="text-muted mb-0">{{ $vehicleType->updated_at->format('M d, Y \a\t g:i A') }}</p>
                                        </div>
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
