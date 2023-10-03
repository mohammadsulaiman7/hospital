<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.includes.css')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('user.includes.header')
    <div style="min-height: 47vh">
        @yield('content')
    </div>
    @include('user.includes.footer')
</body>
</html>
