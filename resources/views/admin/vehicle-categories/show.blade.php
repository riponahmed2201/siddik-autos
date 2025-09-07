@extends('admin.master')

@section('title', 'View Vehicle Category')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>View Vehicle Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.vehicle-categories.index') }}">Vehicle Categories</a></li>
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
                            <h5 class="card-title">Category Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.vehicle-categories.edit', $category) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.vehicle-categories.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Category Name:</label>
                                    <p class="fs-5">{{ $category->name }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Slug:</label>
                                    <p><code>{{ $category->slug }}</code></p>
                                </div>

                                @if($category->description)
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Description:</label>
                                        <p>{{ $category->description }}</p>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Status:</label>
                                            <span class="badge {{ $category->is_active ? 'bg-success' : 'bg-danger' }} fs-6">
                                                {{ $category->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Icon:</label>
                                            <p class="fs-4">
                                                @if($category->icon)
                                                    {{ $category->icon }}
                                                @else
                                                    <i class="bi bi-tag text-muted"></i>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Created:</label>
                                            <p class="text-muted mb-0">{{ $category->created_at->format('M d, Y \a\t g:i A') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Last Updated:</label>
                                            <p class="text-muted mb-0">{{ $category->updated_at->format('M d, Y \a\t g:i A') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="bg-light rounded p-4">
                                        <div class="fs-1 mb-3">
                                            @if($category->icon)
                                                {{ $category->icon }}
                                            @else
                                                <i class="bi bi-tag text-muted"></i>
                                            @endif
                                        </div>
                                        <h4>{{ $category->name }}</h4>
                                        <p class="text-muted">{{ $category->description ?: 'No description available' }}</p>
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
