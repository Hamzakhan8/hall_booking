    <aside class="offcanvas-collapse">
        <div class="avatar-wrap">
            <img src="{{ asset('assets') }}/images/dashboard/avatar_img.jpg" alt="">
            <h3>{{ Auth::user()->username }}</h3>
        </div>
        <div class="sidebar-nav">
            <ul class="list-unstyled">
                <!-- <li>
                    <a href="vendor-dashboard.html"><i class="weddingdir_dashboard"></i> Dashboard</a>
                </li> -->
                <li class="">
                    <a href="{{ route('admin.manage.user') }}"><i class="weddingdir_request_quote"></i> Manage Users</a>
                </li>

                <li class="">
                    <a href="{{ route('admin.manage.hall') }}"><i class="weddingdir_request_quote"></i> Manage Hall</a>
                </li>

                    <li class="">
                    <a href="{{route('halltype.index')}}"><i class="weddingdir_my_listing"></i>Hall Type</a>
                </li>
                <li>
                    <a href="{{route('hall.index')}}"><i class="weddingdir_my_listing"></i>Halls</a>

                </li>
                <li>
                    <a href="{{route('customer.index')}}"><i class="weddingdir_my_profile"></i>customers</a>

                </li>
                <li>
                    <a href="{{route('booking.index')}}"><i class="weddingdir_my_profile"></i>booking</a>

                </li>
                <li>
                    <a href="{{ route('admin.profile') }}"><i class="weddingdir_my_profile"></i> My Profile</a>
                </li>
                <li>
                    <a href="vendor-dashboard-pricing.html"><i class="weddingdir_pricing_plans"></i> Pricing Table</a>
                </li>
                <li>
                    <a href="vendor-dashboard-reviews.html"><i class="weddingdir_reviews"></i> Reviews</a>
                </li>
                <li>
                    <a href="vendor-dashboard-invoice.html"><i class="weddingdir_invoice"></i> Invoice</a>
                </li>
                <li>
                    <a href="chat-hall.html"><i class="weddingdir_chat"></i> Chat</a>
                </li>
            </ul>
        </div>
    </aside>

