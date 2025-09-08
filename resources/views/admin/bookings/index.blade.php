@extends('admin.master')

@section('title', 'Booking Requests')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Booking Requests</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Booking Requests</li>
                </ol>
            </nav>
        </div>

        @if (session('success'))
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
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Recent Booking Requests</h5>
                                <a href="{{ route('admin.bookings.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg"></i> Create Booking
                                </a>
                            </div>
                            <hr>

                            <div class="table-responsive">
                                <table class="table table-striped align-middle">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Vehicle</th>
                                            <th>Destination</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($bookings as $booking)
                                            <tr>
                                                <td>{{ $booking->id }}</td>
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ optional($booking->vehicleType)->name ?? '-' }}</td>
                                                <td>{{ optional($booking->destination)->name ?? '-' }}</td>
                                                <td>{{ $booking->journey_date ? $booking->journey_date->format('M d, Y') : '-' }}
                                                </td>
                                                <td>
                                                    <span
                                                        @class([
                                                            'badge bg-warning' => $booking->status === 'pending',
                                                            'badge bg-success' => $booking->status === 'confirmed',
                                                            'badge bg-danger' => $booking->status === 'cancelled',
                                                        ])>{{ ucfirst($booking->status) }}</span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.bookings.show', $booking) }}"
                                                        class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                                                    <form action="{{ route('admin.bookings.destroy', $booking) }}"
                                                        method="POST" class="d-inline"
                                                        onsubmit="return confirm('Delete this booking?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                                class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No booking requests found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center">
                                {{ $bookings->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
