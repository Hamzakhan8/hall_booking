    <!DOCTYPE html>

<html lang="en">


    @extends('front_view.components.head')
    <!-- end head -->
    <!--body start-->
    <body>

    <!-- preloader -->
    <div class="preloader">
        <div class="status">
            <h1>Book Hall</h1>
        </div>
    </div>
    <!-- end preloader -->

    @extends('front_view.components.header')


    <!-- =============================
       *
       *   Page Content Start
       *
      =============================== -->

    <!--  Page Breadcrumbs Start -->
    <section class="breadcrumbs-page">
        <div class="container">
            <h1>About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--  Page Breadcrumbs End -->

    <main id="body-content">

        <!-- About Intro Start -->
        <section class="wide-tb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 mx-auto">
                        <div class="text-center">
                            <h2 class="fw-7">Who we are</h2>
                            @foreach ($about as $data)
                                <p>{{ strip_tags($data->about) }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Intro Start -->


        <!-- Why Choose Start -->
        <section class="wide-tb-90">

        </section>
        <!-- Why Choose End -->

        <!-- Customer Feedback Start -->
        <section class="wide-tb-90">
            <div class="container">
                <div class="section-title text-center">
                    <h1>feedback from our customers</h1>
                </div>
                <div class="owl-carousel owl-theme dots-black" id="slider-feedback">
                    <!-- Customer Testimonials -->
                    @foreach ($comments as $comment)
                        <div class="item">
                            <div class="customer-feedback-wrap">
                                <div class="content">
                                    <div class="icon"><i class="fa fa-comments"></i></div>
                                    {{ $comment->comment }}
                                </div>
                                <div class="name-wrap">
                                    <div class="text">
                                        <h3>{{ $comment->username }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Customer Testimonials -->
                </div>
            </div>
        </section>
        <!-- Customer Feedback End -->

        <!-- Callout Style Main Start -->
        <section class="callout-main">
            <div class="container-fluid pl-0">
                <div class="row">
                    <div class="col-lg-6" style="background: url({{ asset('assets/images/vendors/vendor_img_1.jpg') }}) center center no-repeat; background-size: cover;">
                        <img src="{{ asset('assets/images/vendors/vendor_img_1.jpg') }}" class="d-lg-none invisible" alt="">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="callout-text">
                            <div class="section-title">
                                <h1>The Best Hall Booking Service</h1>
                            </div>
                            <p class="lead">
                                {{ $contacts }}
                            </p>
                            <a href="{{ route('front.contact') }}" class="btn btn-default btn-rounded btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout Style Main End -->

        <!-- Ideas & Tips Start -->
        <section class="wide-tb-90">
            <div class="container">
                <div class="section-title text-center">
                    <h1>Why Choose Book Hall</h1>
                    <p>The most trusted online hall booking system</p>
                </div>
                <div class="row">

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-4">
                        <div class="icon-box-style-2">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <h4>{{ $halls->count() }} Halls</h4 >
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-4">
                        <div class="icon-box-style-2">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <h4>{{ $transaction->count() }} Trusted Payments</h4>
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-4">
                        <div class="icon-box-style-2">
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                            <h4>{{ $bookings->count() }} Real Bookings</h4 >
                        </div>
                    </div>
                    <!-- Why Choose Icons -->
                </div>
            </div>
        </section>
        <!-- Ideas & Tips End -->

    </main>

    @extends('front_view.components.footer')
    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:23 GMT -->
</html>

