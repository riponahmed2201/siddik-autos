@extends('admin.master')

@section('title', 'Vehicle Types')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Vehicle Types</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Vehicle Types</li>
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
                            <h5 class="card-title">Vehicle Types List</h5>
                            <a href="{{ route('admin.vehicle-types.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Add New Vehicle Type
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Capacity</th>
                                        <th>Features</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($vehicleTypes as $vehicleType)
                                        <tr>
                                            <td>{{ $vehicleType->id }}</td>
                                            <td>
                                                @if($vehicleType->image_path)
                                                    <img src="{{ asset('storage/' . $vehicleType->image_path) }}"
                                                         alt="{{ $vehicleType->name }}"
                                                         class="img-thumbnail"
                                                         style="width: 60px; height: 60px; object-fit: cover;">
                                                @else
                                                    <div class="bg-light d-flex align-items-center justify-content-center"
                                                         style="width: 60px; height: 60px; border: 1px solid #dee2e6;">
                                                        <i class="bi bi-image text-muted"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>{{ $vehicleType->name }}</td>
                                            <td>
                                                @if($vehicleType->category)
                                                    <span class="badge bg-info">
                                                        {{ $vehicleType->category->icon }} {{ $vehicleType->category->name }}
                                                    </span>
                                                @else
                                                    <span class="text-muted">No Category</span>
                                                @endif
                                            </td>
                                            <td>{{ $vehicleType->capacity }}</td>
                                            <td>
                                                @if($vehicleType->features->count() > 0)
                                                    @foreach($vehicleType->features->take(3) as $feature)
                                                        <span class="badge bg-secondary me-1">{{ $feature->icon }} {{ $feature->name }}</span>
                                                    @endforeach
                                                    @if($vehicleType->features->count() > 3)
                                                        <span class="text-muted">+{{ $vehicleType->features->count() - 3 }} more</span>
                                                    @endif
                                                @else
                                                    <span class="text-muted">No Features</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge {{ $vehicleType->is_active ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $vehicleType->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.vehicle-types.show', $vehicleType) }}" class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.vehicle-types.edit', $vehicleType) }}" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('admin.vehicle-types.destroy', $vehicleType) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this vehicle type?')">
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
                                            <td colspan="8" class="text-center">No vehicle types found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            {{ $vehicleTypes->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
