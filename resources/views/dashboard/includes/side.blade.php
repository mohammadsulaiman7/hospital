<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        {{-- <a class="sidebar-brand brand-logo" href="#"><img src="{{asset('images/icon.png')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{asset('images/icon.png')}}" alt="logo" /></a> --}}
        <a class="sidebar-brand brand-logo text-decoration-none " href="{{ route('home') }}"><span
                class="text-success">Qamishlo</span><span class="text-white">-</span><span
                class="text-success">Hospital</span></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><span class="text-white"></span><span
                class="text-success"></span></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle "
                            src="{{ asset('storage/profiles/' . Auth::user()->profile) }}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        <span>{{Auth::user()->email}}</span>
                    </div>
                </div>
              
                
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>



        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-headphones-settings"></i>
                </span>
                <span class="menu-title">Home</span>
            </a>
        </li>--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">s</a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false"
              aria-controls="ui-basic1">
              <span class="menu-icon">
                  <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Doctors</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('doctors.index')}}">All</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('doctors.create')}}">Create</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">s</a></li>
              </ul>
          </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false"
            aria-controls="ui-basic2">
            <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Appointments</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">s</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false"
          aria-controls="ui-basic3">
          <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">News</span>
          <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic3">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Create</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">s</a></li>
          </ul>
      </div>
  </li>


  
<li class="nav-item menu-items">
  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false"
      aria-controls="ui-basic5">
      <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
      </span>
      <span class="menu-title">Speciality</span>
      <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic5">
      <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Create</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">s</a></li>
      </ul>
  </div>
</li>

<li class="nav-item menu-items">
  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false"
      aria-controls="ui-basic6">
      <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
      </span>
      <span class="menu-title">Category</span>
      <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic6">
      <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Create</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">s</a></li>
      </ul>
  </div>
</li>


    </ul>
</nav>
