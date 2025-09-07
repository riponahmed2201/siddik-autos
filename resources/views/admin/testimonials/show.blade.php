@extends('admin.master')

@section('title', 'View Testimonial')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>View Testimonial</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.testimonials.index') }}">Testimonials</a></li>
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
                            <h5 class="card-title">Testimonial Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    @if($testimonial->customer_image)
                                        <img src="{{ asset('storage/' . $testimonial->customer_image) }}"
                                             alt="{{ $testimonial->customer_name }}"
                                             class="img-fluid rounded-circle mb-3"
                                             style="width: 200px; height: 200px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mb-3 mx-auto"
                                             style="width: 200px; height: 200px;">
                                            <i class="bi bi-person text-muted" style="font-size: 4rem;"></i>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $testimonial->customer_name }}</h3>

                                @if($testimonial->customer_position || $testimonial->customer_company)
                                    <p class="text-muted mb-3">
                                        @if($testimonial->customer_position)
                                            {{ $testimonial->customer_position }}
                                        @endif
                                        @if($testimonial->customer_position && $testimonial->customer_company)
                                            at
                                        @endif
                                        @if($testimonial->customer_company)
                                            <strong>{{ $testimonial->customer_company }}</strong>
                                        @endif
                                    </p>
                                @endif

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Rating:</label>
                                    <div class="d-flex text-warning">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $testimonial->rating)
                                                <i class="bi bi-star-fill fs-4"></i>
                                            @else
                                                <i class="bi bi-star fs-4"></i>
                                            @endif
                                        @endfor
                                        <span class="ms-2 text-muted">({{ $testimonial->rating }}/5)</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Testimonial:</label>
                                    <div class="border rounded p-3 bg-light">
                                        <p class="mb-0 fst-italic">"{{ $testimonial->testimonial }}"</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Status:</label>
                                            <span class="badge {{ $testimonial->is_active ? 'bg-success' : 'bg-danger' }} fs-6">
                                                {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Featured:</label>
                                            <span class="badge {{ $testimonial->is_featured ? 'bg-warning' : 'bg-secondary' }} fs-6">
                                                {{ $testimonial->is_featured ? 'Featured' : 'Normal' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Created:</label>
                                            <p class="text-muted mb-0">{{ $testimonial->created_at->format('M d, Y \a\t g:i A') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Last Updated:</label>
                                            <p class="text-muted mb-0">{{ $testimonial->updated_at->format('M d, Y \a\t g:i A') }}</p>
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
