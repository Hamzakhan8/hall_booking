    <aside class="offcanvas-collapse">
        <div class="avatar-wrap">
            <!-- <img src="assets/images/dashboard/avatar_img.jpg" alt="">
            <h3>Hitesh Mahavar</h3> -->
            <h2>Customer Dashbaord</h2>
        </div>
        <div class="sidebar-nav">
            <ul class="list-unstyled">
                <!-- <li>
                    <a href="vendor-dashboard.html"><i class="weddingdir_dashboard"></i> Dashboard</a>
                </li> -->
                <li class="">
                    <a href="{{ route('couple.profile') }}"><i class="weddingdir_request_quote"></i>My Profile</a>
                </li>

                    <li class="">
                    <a href="{{route('couple.bookedhall')}}"><i class="weddingdir_my_listing"></i>Booked Hall</a>
                </li>
              
                <li>
                    <a href="{{ route('couple.transaction') }}"><i class="weddingdir_my_profile"></i>Transaction Record</a>

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
        </div>
    </aside>

