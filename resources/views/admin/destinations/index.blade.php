@extends('admin.master')

@section('title', 'Destinations')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Destinations</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Destinations</li>
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
                            <h5 class="card-title">Destinations List</h5>
                            <a href="{{ route('admin.destinations.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Add New Destination
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Zone</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($destinations as $destination)
                                        <tr>
                                            <td>{{ $destination->id }}</td>
                                            <td>{{ $destination->name }}</td>
                                            <td>
                                                <span class="badge bg-info">{{ $destination->zone ?: 'No Zone' }}</span>
                                            </td>
                                            <td>{{ Str::limit($destination->description, 50) }}</td>
                                            <td>
                                                <span class="badge {{ $destination->is_active ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $destination->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.destinations.show', $destination) }}" class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.destinations.edit', $destination) }}" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('admin.destinations.destroy', $destination) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this destination?')">
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
                                            <td colspan="6" class="text-center">No destinations found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            {{ $destinations->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
