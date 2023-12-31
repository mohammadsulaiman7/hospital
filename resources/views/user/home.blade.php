<!DOCTYPE html>
<html lang="en">
<head>
   @include('user.includes.css')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('user.includes.header')

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your <span class="text-success">life happier</span></span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="#" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>

        @include('user.includes.cards')

        @include('user.includes.doctor')

        @include('user.includes.latest-news')
        @if (Auth::user()->usertype == '0')
        @include('user.includes.appointment')
        @else
            
        @endif

        <!-- .banner-home -->

       @include('user.includes.footer')

        <script src="../assets/js/jquery-3.5.1.min.js"></script>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

        <script src="../assets/vendor/wow/wow.min.js"></script>

        <script src="../assets/js/theme.js"></script>

</body>

</html>
