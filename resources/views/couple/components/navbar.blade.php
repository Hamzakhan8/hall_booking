<header class="fixed-top header-anim">
    <!-- Main Navigation Start -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid text-nowrap bdr-nav px-0">
            <a href="javascript:" class="sidebar-toggle mobile" data-toggle="offcanvas">
                <i class="fa fa-bars"></i>
            </a>
            <div class="d-flex align-items-center">
                <a href="javascript:" class="sidebar-toggle desktop" data-toggle="offcanvas">
                    <i class="fa fa-bars"></i>
                </a>
                <a class="navbar-brand" href="index.html">
                    <h2>Couple Dashoard</h2>
                </a>
            </div>

            <!-- Topbar Request Quote End -->
            <ul class="navbar-nav ml-auto">
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
        </div>
    </nav>

    <!-- Main Navigation End -->
</header>
