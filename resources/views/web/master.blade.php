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

    @include('web.partials.scripts')
</body>

</html>
