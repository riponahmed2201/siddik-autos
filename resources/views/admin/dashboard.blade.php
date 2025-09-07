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
                                            <span class="text-success small pt-1 fw-bold">{{ \App\Models\VehicleType::where('is_active', true)->count() }}</span> <span
                                                class="text-muted small pt-2 ps-1">active</span>

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
                                            <span class="text-success small pt-1 fw-bold">{{ \App\Models\Destination::where('is_active', true)->count() }}</span> <span
                                                class="text-muted small pt-2 ps-1">active</span>

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
                                            <span class="text-success small pt-1 fw-bold">{{ \App\Models\Pricing::where('is_active', true)->count() }}</span> <span
                                                class="text-muted small pt-2 ps-1">active</span>

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
                            <div class="card recent-sales overflow-auto">

                                <div class="card-header">
                                    <h5 class="card-title">Booking Request</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
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
