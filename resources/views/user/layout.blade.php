<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('user.header')
    <div style="min-height: 47vh">
        @yield('content')
    </div>
    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
