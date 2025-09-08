<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Vehicle Management</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.vehicle-types.index') }}">
                <i class="bi bi-car-front"></i><span>Vehicle Types</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.vehicle-categories.index') }}">
                <i class="bi bi-list-ul"></i><span>Vehicle Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.vehicle-features.index') }}">
                <i class="bi bi-star"></i><span>Vehicle Features</span>
            </a>
        </li>

        <li class="nav-heading">Destination & Pricing</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.destinations.index') }}">
                <i class="bi bi-geo-alt"></i><span>Destinations</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.pricing.index') }}">
                <i class="bi bi-cash-coin"></i><span>Pricing</span>
            </a>
        </li>

        <li class="nav-heading">Content Management</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.blogs.index') }}">
                <i class="bi bi-journal-text"></i><span>Blogs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.testimonials.index') }}">
                <i class="bi bi-chat-quote"></i><span>Testimonials</span>
            </a>
        </li>

        <li class="nav-heading">Booking Management</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.bookings.index') }}">
                <i class="bi bi-calendar-check"></i><span>Booking Requests</span>
            </a>
        </li>
    </ul>
</aside>
