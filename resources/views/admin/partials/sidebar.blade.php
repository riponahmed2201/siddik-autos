<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Car Rental Management</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#car-rental-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-car-front"></i><span>Car Rental</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="car-rental-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.vehicle-types.index') }}">
                        <i class="bi bi-circle"></i><span>Vehicle Types</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.destinations.index') }}">
                        <i class="bi bi-circle"></i><span>Destinations</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pricing.index') }}">
                        <i class="bi bi-circle"></i><span>Pricing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blogs.index') }}">
                        <i class="bi bi-circle"></i><span>Blogs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.bookings.index') }}">
                        <i class="bi bi-circle"></i><span>Booking Requests</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Car Rental Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>
</aside>
