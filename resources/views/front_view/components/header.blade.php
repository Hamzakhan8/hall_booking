<header class="fixed-top header-anim">

    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container text-nowrap bdr-nav px-0">
            <div class="d-flex mr-auto">
                <a class="navbar-brand" href="{{ route('front.home') }}">
                    <h2 style="color:#00aeaf;">BOOK HALL</h2>
                </a>
            </div>

            <!-- Dashboard Button -->
            @if (!Auth::check())
                <!-- Topbar Request Quote Start -->
                {{-- <span class="order-lg-last d-inline-flex ml-3">
                    <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#login_form">
                        Get Started Now
                    </a>
                </span> --}}
                <span class="order-lg-last d-inline-flex ml-3">
                    <div class="dropdown open">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Get Started Now
                        </button>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <a class="dropdown-item" href="{{ route('auth.login.show') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('auth.register.show') }}">Register</a>
                        </div>
                    </div>
                </span>
                <!-- Toggle Button Start -->
                @elseif (Auth::user()->role == "admin")
                <span class="order-lg-last d-inline-flex ml-3">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-warning text-white" role="button">
                    Dashboard
                    </a>
                </span>
                @elseif (Auth::user()->role == "hall")
                <span class="order-lg-last d-inline-flex ml-3">
                    <a href="{{ route('hall.dashboard') }}" class="btn btn-warning text-white" role="button">
                    Dashboard
                    </a>
                </span>
                @elseif (Auth::user()->role == "couple")
                <span class="order-lg-last d-inline-flex ml-3">
                    <a href="{{ route('couple.dashboard') }}" class="btn btn-warning text-white" role="button">
                    Dashboard
                    </a>
                </span>
            @endif
            <!-- Dashboard Button -->

            <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Toggle Button End -->

            <!-- Topbar Request Quote End -->

            <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown"
                data-animations="slideInUp slideInUp slideInUp slideInUp">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <li><a class="nav-link dropdown-toggle-mob" href="{{ route('front.home') }}" aria-haspopup="true" aria-expanded="false">Home</a></li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-mob" href="{{ route('front.about') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-mob" href="{{ route('front.search') }}">Hall Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a>
                   </li>
                </ul>
                <!-- Main Navigation End -->
            </div>


        </div>
    </nav>
    <!-- Main Navigation End -->
</header>
