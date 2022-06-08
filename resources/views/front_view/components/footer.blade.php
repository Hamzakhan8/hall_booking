<footer>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-5">
                        <div class="footer-logo">
                            <h2 style="color:#00aeaf;">BOOK HALL</h2>
                            <p>An online Hall booking System to find the best and affordable Halls all over the Country.</p>
                        </div>
                        <div><a href="{{ route('front.about') }}" class="btn btn-primary">Know More</a></div>
                    </div>

                    <div class="col-md">
                        <div class="footer-widget">
                            <h3 class="widget-title">Menu</h3>
                            <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                                <li><a href="{{ route('front.home') }}">Home</a></li>
                                <li><a href="{{ route('front.search') }}">Hall Booking</a></li>
                                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="footer-widget">
                            <h3 class="widget-title">Locations</h3>
                            <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                            @foreach ($list_halls as $list_hall)
                                <li><a class="searc_by_location" data-hall-location="{{ $list_hall->location }}" href="{{ route('front.search') }}">{{ $list_hall->location }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mr-top-footer">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">Contact Us</h3>
                            @foreach ($footer as $foo)
                                <div class="widget-contact">
                                    <p>Location : {{ $foo->location }}</p>
                                    <p>Call : <a href="tel:+81-258-852-6699">{{ $foo->phone_number }}</a></p>
                                    <p>Mail : <a href="mailto:Info@weddingdir.com">{{ $foo->email }}</a></p>

                                </div>
                                <div class="social-icons-footers">
                                    <ul class="list-unstyled d-flex">
                                        @foreach ($foo->social_links as $names => $links)
                                        @php
                                            $i = "fa fa-".$names."";
                                            $class = "share-btn-".$names."";
                                        @endphp
                                        <li><a href="{{ $links }}" class="{{ $class }}"><i class="{{ $i }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <div class="row">
                @foreach ($footer as $foo)
                <div class="col-md-auto col-12">
                    {{ $foo->copyRight }}
                </div>
                @endforeach
                <div class="col-md-auto col-12 copyrights-link ml-md-auto">
                    <a href="{{ route('front.home') }}">Home</a> | <a href="{{ route('front.about') }}">About</a> | <a href="{{ route('front.contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
