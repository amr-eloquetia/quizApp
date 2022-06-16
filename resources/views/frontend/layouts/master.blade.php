<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('frontend.layouts.header')
</head>

<body class="preload">
    @include('frontend.layouts.navbar')

    <!-- content-area -->
    @yield('content')
    <!-- ends: .content area -->
    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')

</body>

</html>
