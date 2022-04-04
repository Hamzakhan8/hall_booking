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
                                <li><a href="{{ route('front.search') }}">Peshawar</a></li>
                                <li><a href="{{ route('front.search') }}">Islamabad</a></li>
                                <li><a href="{{ route('front.search') }}">Lahore</a></li>
                                <li><a href="{{ route('front.search') }}">Karachi</a></li>
                                <li><a href="{{ route('front.search') }}">Multan</a></li>
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
                            <div class="widget-contact">
                                <p>Peshawar, Pakistan</p>
                                <p>Call : <a href="tel:+81-258-852-6699">Number</a></p>
                                <p>Mail : <a href="mailto:Info@weddingdir.com">Info@hall.com</a></p>
                            </div>
                            <div class="social-icons-footers">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:"><i class="fa fa-instagram"></i></a>
                                    <li><a href="javascript:"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <p>Subscribe to our newsletter  to receive exclusive offers.</p>
                            <div class="mb-3"><input type="text" class="form-control form-light" id="exampleFormControlInput1" placeholder="Enter Email Address"></div>
                            <button type="button" class="btn btn-default">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-auto col-12">
                    © 2022 All rights reserved.
                </div>
                <div class="col-md-auto col-12 copyrights-link ml-md-auto">
                    <a href="{{ route('front.home') }}">Home</a> | <a href="{{ route('front.about') }}">About</a> | <a href="{{ route('front.contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
