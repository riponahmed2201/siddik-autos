@extends('admin.master')

@section('title', 'View Vehicle Feature')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>View Vehicle Feature</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.vehicle-features.index') }}">Vehicle Features</a></li>
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
                            <h5 class="card-title">Feature Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.vehicle-features.edit', $feature) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.vehicle-features.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Feature Name:</label>
                                    <p class="fs-5">{{ $feature->name }}</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Status:</label>
                                            <span class="badge {{ $feature->is_active ? 'bg-success' : 'bg-danger' }} fs-6">
                                                {{ $feature->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Icon:</label>
                                            <p class="fs-4">
                                                @if($feature->icon)
                                                    {{ $feature->icon }}
                                                @else
                                                    <i class="bi bi-star text-muted"></i>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Created:</label>
                                            <p class="text-muted mb-0">{{ $feature->created_at->format('M d, Y \a\t g:i A') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Last Updated:</label>
                                            <p class="text-muted mb-0">{{ $feature->updated_at->format('M d, Y \a\t g:i A') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="bg-light rounded p-4">
                                        <div class="fs-1 mb-3">
                                            @if($feature->icon)
                                                {{ $feature->icon }}
                                            @else
                                                <i class="bi bi-star text-muted"></i>
                                            @endif
                                        </div>
                                        <h4>{{ $feature->name }}</h4>
                                        <p class="text-muted">Vehicle Feature</p>
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
