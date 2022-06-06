<header class="fixed-top header-anim">
    <!-- Main Navigation Start -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid text-nowrap bdr-nav px-0">
            <a href="javascript:" class="sidebar-toggle mobile" data-toggle="offcanvas">
                <i class="fa fa-bars"></i>
            </a>
            <div class="d-flex mx-auto align-items-center">
                <a href="javascript:" class="sidebar-toggle desktop" data-toggle="offcanvas">
                    <i class="fa fa-bars"></i>
                </a>
                <a class="navbar-brand" href="{{ route('hall.dashboard') }}">
                    <h2>HALL Dashboard</h2>
                </a>
            </div>
            <!-- Toggle Button Start -->
            <button class="navbar-toggler x collapsed" type="button" data-toggle="offcanvas-mobile"
                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Toggle Button End -->

            <!-- Topbar Request Quote End -->

            <div class="collapse navbar-collapse offcanvas-collapse-mobile" id="navbarCollapse" data-hover="dropdown"
                data-animations="slideInUp slideInUp slideInUp slideInUp">
                <ul class="navbar-nav ml-auto">

                    <li>
                        <a class="dropdown-item" href="{{ route('front.home') }}">Home</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('front.about') }}">About</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('front.contact') }}">Contact Us</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('auth.logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="weddingdir_logout"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
                <!-- Main Navigation End -->
            </div>
        </div>
    </nav>

    <!-- Main Navigation End -->
</header>
