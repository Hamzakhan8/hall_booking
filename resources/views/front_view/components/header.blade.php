<header class="fixed-top header-anim">
    <div class="top-bar-stripe">
        <div class="container px-md-0">
            <div class="row align-items-center">
                <div class="col-lg-auto col-sm-12">
                    <div class="top-icons">
                        <span><i class="fa fa-map-marker"></i> Peshawar, Pakisatan</span>
                        <span><a href="mailto:info@weddingdir.com"><i class="fa fa-envelope"></i> info@hall.com</a></span>
                    </div>
                </div>
                <div class="col-sm-12 col-lg">
                    <div class="social-icons">
                        <ul class="list-unstyled">
                            <li><a href="javascript:"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-instagram"></i></a>
                            <li><a href="javascript:"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container text-nowrap bdr-nav px-0">
            <div class="d-flex mr-auto">
                <a class="navbar-brand" href="{{ route('front.home') }}">
                    <h2 style="color:#00aeaf;">BOOK HALL</h2>
                </a>
            </div>
            <!-- Topbar Request Quote Start -->
            <span class="order-lg-last d-inline-flex ml-3">
                <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#login_form"> Get Started Now</a>
            </span>
            <!-- Toggle Button Start -->
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
