@extends('admin.master')

@section('title', 'Create Testimonial')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Create Testimonial</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.testimonials.index') }}">Testimonials</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Testimonial Information</h5>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="customer_name" class="form-label">Customer Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="customer_name" name="customer_name"
                                               value="{{ old('customer_name') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="customer_position" class="form-label">Position</label>
                                        <input type="text" class="form-control" id="customer_position" name="customer_position"
                                               value="{{ old('customer_position') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="customer_company" class="form-label">Company</label>
                                        <input type="text" class="form-control" id="customer_company" name="customer_company"
                                               value="{{ old('customer_company') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                                        <select class="form-select" id="rating" name="rating" required>
                                            <option value="">Select Rating</option>
                                            <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>1 Star</option>
                                            <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>2 Stars</option>
                                            <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>3 Stars</option>
                                            <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>4 Stars</option>
                                            <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>5 Stars</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="testimonial" class="form-label">Testimonial <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="testimonial" name="testimonial" rows="4" required>{{ old('testimonial') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="customer_image" class="form-label">Customer Image</label>
                                <input type="file" class="form-control" id="customer_image" name="customer_image"
                                       accept="image/*">
                                <div class="form-text">Recommended size: 200x200px. Max size: 2MB</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured"
                                               {{ old('is_featured') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_featured">
                                            Featured Testimonial
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                               {{ old('is_active', true) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">
                                            Active
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Create Testimonial</button>
                                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
