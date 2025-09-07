@extends('admin.master')

@section('title', 'Testimonials')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Testimonials</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Testimonials</li>
            </ol>
        </nav>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title">Testimonials List</h5>
                            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Add New Testimonial
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Customer Name</th>
                                        <th>Position/Company</th>
                                        <th>Rating</th>
                                        <th>Testimonial</th>
                                        <th>Featured</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $testimonial->id }}</td>
                                            <td>
                                                @if($testimonial->customer_image)
                                                    <img src="{{ asset('storage/' . $testimonial->customer_image) }}"
                                                         alt="{{ $testimonial->customer_name }}"
                                                         class="img-thumbnail"
                                                         style="width: 50px; height: 50px; object-fit: cover;">
                                                @else
                                                    <div class="bg-light d-flex align-items-center justify-content-center"
                                                         style="width: 50px; height: 50px; border: 1px solid #dee2e6;">
                                                        <i class="bi bi-person text-muted"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>{{ $testimonial->customer_name }}</td>
                                            <td>
                                                @if($testimonial->customer_position)
                                                    {{ $testimonial->customer_position }}
                                                    @if($testimonial->customer_company)
                                                        <br><small class="text-muted">{{ $testimonial->customer_company }}</small>
                                                    @endif
                                                @elseif($testimonial->customer_company)
                                                    {{ $testimonial->customer_company }}
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex text-warning">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $testimonial->rating)
                                                            <i class="bi bi-star-fill"></i>
                                                        @else
                                                            <i class="bi bi-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </td>
                                            <td>{{ Str::limit($testimonial->testimonial, 50) }}</td>
                                            <td>
                                                <span class="badge {{ $testimonial->is_featured ? 'bg-warning' : 'bg-secondary' }}">
                                                    {{ $testimonial->is_featured ? 'Featured' : 'Normal' }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge {{ $testimonial->is_active ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.testimonials.show', $testimonial) }}" class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No testimonials found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            {{ $testimonials->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
