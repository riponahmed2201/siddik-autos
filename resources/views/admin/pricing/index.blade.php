@extends('admin.master')

@section('title', 'Pricing')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Pricing Management</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Pricing</li>
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
                            <h5 class="card-title">Pricing List</h5>
                            <a href="{{ route('admin.pricing.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Add New Pricing
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Vehicle Type</th>
                                        <th>Destination</th>
                                        <th>From Location</th>
                                        <th>Price (BDT)</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pricing as $price)
                                        <tr>
                                            <td>{{ $price->id }}</td>
                                            <td>{{ $price->vehicleType->name }}</td>
                                            <td>{{ $price->destination->name }}</td>
                                            <td>{{ $price->from_location }}</td>
                                            <td>
                                                <span class="fw-bold text-success">{{ number_format($price->price, 2) }}</span>
                                            </td>
                                            <td>
                                                <span class="badge {{ $price->is_active ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $price->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.pricing.show', $price) }}" class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.pricing.edit', $price) }}" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('admin.pricing.destroy', $price) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this pricing?')">
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
                                            <td colspan="7" class="text-center">No pricing found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            {{ $pricing->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
