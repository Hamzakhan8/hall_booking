    <aside class="offcanvas-collapse">
        <div class="avatar-wrap">
            <img src="{{ asset('storage/profile_img/'.Auth::user()->profile->avatar) }}"
            width="130"
            height="130"
            alt="profile_image">
            <h3>{{ Auth::user()->username }}</h3>
        </div>
        <div class="sidebar-nav">
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('couple.profile') }}"><i class="weddingdir_request_quote"></i>My Profile</a>
                </li>
                <li>
                    <a href="{{route('couple.booked.hall')}}"><i class="weddingdir_my_listing"></i>Bookings</a>
                </li>
                <li>
                    <a href="{{ route('couple.transaction') }}"><i class="weddingdir_my_profile"></i>Transactions</a>
                </li>
            </ul>
        </div>
    </aside>

