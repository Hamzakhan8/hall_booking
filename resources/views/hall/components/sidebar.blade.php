    <aside class="offcanvas-collapse">
        <div class="avatar-wrap">
            @if (!empty(Auth::user()->profile->avatar))
                <img src="{{ asset('storage/profile_img/'.Auth::user()->profile->avatar) }}"
                width="130"
                height="130"
                alt="profile_image">
                @elseif (empty(Auth::user()->profile->avatar))
                <img src='{{ asset('assets/images/about/team/team_img_1.jpg') }}'
                width="130"
                height="130"
                alt="profile_image">
            @endif
            <h3>{{ Auth::user()->username }}</h3>
        </div>
        <div class="sidebar-nav">
            <ul class="list-unstyled">

                <li class="sidebar_btn">
                    <a class="" href="{{ route('hall.profile') }}"><i class="weddingdir_request_quote"></i>My Profile</a>
                </li>

                <li class="sidebar_btn">
                    <a class="" href="{{ route('hall.category.index') }}"><i class="weddingdir_pricing_plans"></i>Hall Categories</a>
                </li>

                <li class="sidebar_btn">
                    <a class="" href="{{ route('hall.halls.index') }}"><i class="weddingdir_my_listing"></i>Halls</a>
                </li>
                <li class="sidebar_btn">
                    <a class="" id="sidebar_a" href="{{ route('hall.bookings') }}"><i class="weddingdir_request_quote"></i>Bookings</a>
                </li>

                <li class="sidebar_btn">
                    <a class="" href="{{ route('hall.comment') }}"><i class="weddingdir_my_listing"></i>User Comments</a>
                </li>

                <li>
                    <a href="{{ route('hall.transaction.index') }}"><i class="weddingdir_my_profile"></i>Transactions</a>
                </li>
            </ul>
        </div>
    </aside>


