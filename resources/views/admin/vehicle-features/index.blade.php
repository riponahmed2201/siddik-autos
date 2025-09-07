@extends('admin.master')

@section('title', 'Vehicle Features')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Vehicle Features</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Vehicle Features</li>
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
                            <h5 class="card-title">Vehicle Features List</h5>
                            <a href="{{ route('admin.vehicle-features.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Add New Feature
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($features as $feature)
                                        <tr>
                                            <td>{{ $feature->id }}</td>
                                            <td>
                                                @if($feature->icon)
                                                    <span class="fs-4">{{ $feature->icon }}</span>
                                                @else
                                                    <i class="bi bi-star text-muted"></i>
                                                @endif
                                            </td>
                                            <td>{{ $feature->name }}</td>
                                            <td>
                                                <span class="badge {{ $feature->is_active ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $feature->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.vehicle-features.show', $feature) }}" class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.vehicle-features.edit', $feature) }}" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('admin.vehicle-features.destroy', $feature) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this feature?')">
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
                                            <td colspan="5" class="text-center">No features found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            {{ $features->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
