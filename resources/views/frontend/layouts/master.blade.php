<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('Frontend.layouts.header')
</head>

<body class="preload">
    @include('Frontend.layouts.navbar')

    <!-- content-area -->
    @yield('content')
    <!-- ends: .content area -->
    @include('frontend.layouts.footer')
    @include('Frontend.layouts.scripts')

</body>

</html>
