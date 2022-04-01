    <aside class="offcanvas-collapse">
        <div class="avatar-wrap">
            <!-- <img src="assets/images/dashboard/avatar_img.jpg" alt="">
            <h3>Hitesh Mahavar</h3> -->
            <h2>Hall Dashbaord</h2>
        </div>
        <div class="sidebar-nav">
            <ul class="list-unstyled">
                <!-- <li>
                    <a href="vendor-dashboard.html"><i class="weddingdir_dashboard"></i> Dashboard</a>
                </li> -->
                <li class="">
                    <a href="{{route('Manage-user.index')}}"><i class="weddingdir_request_quote"></i> Manage Users</a>
                </li>

                    <li class="">
                    <a href="{{route('hallcategory.index')}}"><i class="weddingdir_pricing_plans"></i>Hallcategory</a>
                </li>
                <li>
                    <a href="{{route('Halls.index')}}"><i class="weddingdir_my_listing"></i>Halls</a>

                </li>


              {{--sad  <li>
                    <a href="vendor-dashboard-profile.html"><i class="weddingdir_my_profile"></i> My Profile</a>
                </li>--}}
                <!-- <li>
                    <a href="vendor-dashboard-pricing.html"><i class="weddingdir_pricing_plans"></i> Pricing Table</a>
                </li>

                <li>
                    <a href="vendor-dashboard-reviews.html"><i class="weddingdir_reviews"></i> Reviews</a>
                </li>
                <li>
                    <a href="vendor-dashboard-invoice.html"><i class="weddingdir_invoice"></i> Invoice</a>
                </li> -->

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


