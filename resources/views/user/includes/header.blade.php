<header>
    <div class="topbar">
        <div class="container">
            {{-- <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> --}}
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .topbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-primary">Qamishlo</span>-Hospital</a>

            {{-- <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                        aria-describedby="icon-addon1">
                </div>
            </form> --}}

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarSupport">
                <ul class="navbar-nav ml-auto" id="navMenu">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctors.html">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news.index')}}">News</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li> --}}
                    @if (Auth::user()->usertype == '1')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Admin panel</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('appointments.index') }}">Appointments</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <img src="{{asset('storage/profiles/'.Auth::user()->profile)}}" alt="Profile Image" class="rounded-circle profile-image" style="width: 45px; margin:8px">
                    </li>
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-danger ml-lg-3">Logout</button>

                        </form>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                 
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    // Get the current URL
    var currentUrl = window.location.pathname;

    // Get all anchor links in the navigation menu
    var navLinks = document.querySelectorAll('#navMenu a');

    // Loop through each anchor link and check if it matches the current URL
    for (var i = 0; i < navLinks.length; i++) {
        var linkUrl = navLinks[i].getAttribute('href');
        if (linkUrl === currentUrl) {
            // Add the "active" class to the matching link
            navLinks[i].classList.add('active');
        }
    }
</script>
