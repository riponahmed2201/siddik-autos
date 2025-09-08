@extends('admin.master')


@section('title', 'Admin Dashboard')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">

                        <!-- Vehicle Types Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Vehicle Types <span>| Total</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-car-front"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ \App\Models\VehicleType::count() }}</h6>
                                            <span
                                                class="text-success small pt-1 fw-bold">{{ \App\Models\VehicleType::where('is_active', true)->count() }}</span>
                                            <span class="text-muted small pt-2 ps-1">active</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Vehicle Types Card -->

                        <!-- Destinations Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Destinations <span>| Total</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ \App\Models\Destination::count() }}</h6>
                                            <span
                                                class="text-success small pt-1 fw-bold">{{ \App\Models\Destination::where('is_active', true)->count() }}</span>
                                            <span class="text-muted small pt-2 ps-1">active</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Destinations Card -->

                        <!-- Pricing Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pricing Records <span>| Total</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ \App\Models\Pricing::count() }}</h6>
                                            <span
                                                class="text-success small pt-1 fw-bold">{{ \App\Models\Pricing::where('is_active', true)->count() }}</span>
                                            <span class="text-muted small pt-2 ps-1">active</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Pricing Card -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <!-- Booking Request -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Recent Booking Requests</h5>

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
                                                        <td colspan="8" class="text-center">No booking requests found.
                                                        </td>
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
                        <!-- End Booking Request -->
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
