    <aside class="offcanvas-collapse">
        <div class="avatar-wrap">
            <img src="{{ asset('assets') }}/images/dashboard/avatar_img.jpg" alt="">
            <h3>{{ Auth::user()->username }}</h3>
        </div>
        <div class="sidebar-nav">
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('admin.manage.user') }}"><i class="weddingdir_request_quote"></i> Manage Couple</a>
                </li>

                <li>
                    <a href="{{ route('admin.manage.hall') }}"><i class="weddingdir_request_quote"></i> Manage Hall</a>
                </li>

                    <li>
                    <a href="{{ route('admin.transaction') }}"><i class="weddingdir_my_listing"></i>Transaction</a>
                </li>
                <li>
                    <a href="{{ route('admin.booking') }}"><i class="weddingdir_my_listing"></i>Bookings</a>

                </li>
                <li>
                    <a href="{{ route('admin.slider.img') }}"><i class="weddingdir_my_profile"></i>Slider Image</a>

                </li>
                <li>
                    <a href="{{ route('admin.comment') }}"><i class="weddingdir_my_profile"></i>Comments</a>
                </li>
                <li>
                    <a href="{{ route('admin.profile') }}"><i class="weddingdir_my_profile"></i>My Profile</a>
                </li>
                <li>
                    <a href="{{ route('admin.reviews') }}"><i class="weddingdir_reviews"></i>Reviews</a>
                </li>
                <li>
                    <a href="{{ route('admin.contact') }}"><i class="weddingdir_reviews"></i>Contact</a>
                </li>
            </ul>
        </div>
    </aside>

