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
                <li>
                    <a href="{{ route('hall.bookings') }}"><i class="weddingdir_request_quote"></i>Bookings</a>
                </li>

                <li>
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
            </ul>
        </div>
    </aside>


