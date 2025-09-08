<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.partials.styles')
</head>

<body class="bg-gray-50">
    <!-- Top Bar -->
    @include('web.partials.topBar')

    <!-- Header with Dropdown -->
    @include('web.partials.header')

    @yield('content')

    <!-- Footer -->
    @include('web.partials.footer')

    <!-- Toast Container -->
    <div id="toast-root" class="fixed top-4 right-4 z-[100] space-y-3"></div>

    @include('web.partials.scripts')
</body>

</html>
