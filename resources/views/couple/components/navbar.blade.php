<header class="fixed-top header-anim">
    <!-- Main Navigation Start -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid text-nowrap bdr-nav px-0">
            <a href="javascript:" class="sidebar-toggle mobile" data-toggle="offcanvas">
                <i class="fa fa-bars"></i>
            </a>
            <div class="d-flex mx-auto align-items-center">
                <a class="navbar-brand" href="index.html">
                    <h2>Dashoard</h2>
                    <!-- <img src="assets/images/logo_dark.svg" alt=""> -->
                </a>
                <a href="javascript:" class="sidebar-toggle desktop" data-toggle="offcanvas">
                    <i class="fa fa-bars"></i>
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

                    <li class="nav-item">
                        <a class="m-2" class="dropdown-item" href="{{ route('auth.logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <i class="weddingdir_logout"></i> {{ __('Logout') }}
                     </a>
                   </li>

                </ul>
                <!-- Main Navigation End -->
            </div>
        </div>
    </nav>

    <!-- Main Navigation End -->
</header>
