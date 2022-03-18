<!DOCTYPE html>
<!--

**********************************************************************************************************
Copyright (c) 2020
**********************************************************************************************************

Template Name: WeddingDir - HTML Template
Version: 1.0.0
Author: wp-organic

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]>
-->
<html lang="en">
    <!-- <![endif]-->
    <!-- head -->

<!-- Mirrored from wporganic.com/html/weddingdir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:24:51 GMT -->
    @extends('front_view.components.head')
    <!-- end head -->
    <!--body start-->
    <body>

    <!-- preloader -->
    <div class="preloader">
        <div class="status">
            <img src="{{ asset('assets') }}/images/logo_light.svg" alt="">
        </div>
    </div>
    <!-- end preloader -->

    <!--  WeddingDir top -->
    @extends('front_view.components.header')
    <!--  WeddingDir top -->

    <!-- =============================
       *
       *   Page Content Start
       *
      =============================== -->

    <section class="slider-wrap">
        <div class="owl-carousel owl-theme" id="slider-home">
            <!-- Home Slider Images -->
            <div class="item">
                <div class="home-slider">
                    <img height="500px" src="{{ asset('assets') }}/images/slider/2.jpg" alt="">
                </div>
            </div>
            <!-- Home Slider Images -->

            <!-- Home Slider Images -->
            <div class="item">
                <div class="home-slider">
                    <img height="500px" src="{{ asset('assets') }}/images/slider/3.jpg" alt="">
                </div>
            </div>
            <!-- Home Slider Images -->

                        <!-- Home Slider Images -->
            <div class="item">
                <div class="home-slider">
                    <img height="500px" src="{{ asset('assets') }}/images/slider/1.jpg" alt="">
                </div>
            </div>
            <!-- Home Slider Images -->
        </div>

        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 mx-auto">
                        <h1>FIND the Perfect Hall</h1>
                        <p class="lead txt-white text-center">Search over 360,000 Halls with reviews, pricing, availability and more</p>
                        <div class="slider-form rounded">
                            <div class="row no-gutters align-items-center">
                                <div class="col-12 col-md-5">
                                    <select class="form-light-select theme-combo home-select-1" name="state">
                                        <option>Choose Hall Type</option>
                                        <option value="AL">Wedding Hall</option>
                                        <option value="WY">Seminar Hall</option>
                                        <option value="WY">Vendor Type 3</option>
                                        <option value="WY">Vendor Type 4</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-5 left-border">
                                    <select class="form-light-select theme-combo home-select-2" name="state">
                                        <option>Choose Location</option>
                                        <option value="AL">Peshawar</option>
                                        <option value="WY">Islamabad</option>
                                        <option value="WY">Lahore</option>
                                        <option value="WY">Karachi</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-2">
                                    <a href="{{ route('front.search') }}" class="btn btn-default text-nowrap btn-block" >Search Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <main id="body-content">

        <!-- Top Wedding Listings Start -->
        <section class="wide-tb-120 floral-bg">
            <div class="container">
                <div class="section-title text-center">
                    <h1>Top Hall Listings</h1>
                    <p>Chose one of the best Hall all over Pakistan</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="wedding-listing">
                            <div class="img">
                                <a href="listing-singular.html">
                                    <img height="263px" src="{{ asset('assets') }}/images/weddings/3.jpg" alt="">
                                </a>
                                <div class="img-content">
                                    <div class="top">
                                        <span class="price">
                                            <i class="fa fa-tag"></i>
                                            <span>$500-$800</span>
                                        </span>
                                    </div>
                                    <div class="bottom">
                                        <a class="tags" href="javascript:">
                                            Peshawar
                                        </a>
                                        <a class="favorite" href="javascript:">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="gap">
                                    <h3><a href="{{ route('front.search') }}">Town Wedding Hall <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                    <div><i class="fa fa-map-marker"></i> Peshawar, Pakistan</div>
                                </div>
                                <div class="reviews">
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </span>
                                    (123 review)
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wedding-listing">
                            <div class="img">
                                <a href="listing-singular.html">
                                    <img height="263px" src="{{ asset('assets') }}/images/weddings/1.jfif" alt="">
                                </a>
                                <div class="img-content">
                                    <div class="top">
                                        <span class="featured">
                                            <i class="fa fa-star"></i>
                                            <span>Featured</span>
                                        </span>
                                        <span class="price">
                                            <i class="fa fa-tag"></i>
                                            <span>$500-$800</span>
                                        </span>
                                    </div>
                                    <div class="bottom">
                                        <a class="tags" href="javascript:">
                                            Islamabad
                                        </a>
                                        <a class="favorite" href="javascript:">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="gap">
                                    <h3><a href="{{ route('front.search') }}">Islamabad Serena Hall <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                    <div><i class="fa fa-map-marker"></i> Islamabad, Pakistan</div>
                                </div>
                                <div class="reviews">
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    (241 review)
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="wedding-listing">
                            <div class="img">
                                <a href="listing-singular.html">
                                    <img height="263px" src="{{ asset('assets') }}/images/weddings/2.jpg" alt="">
                                </a>
                                <div class="img-content">
                                    <div class="top">
                                        <span class="price">
                                            <i class="fa fa-tag"></i>
                                            <span>$500-$800</span>
                                        </span>
                                    </div>
                                    <div class="bottom">
                                        <a class="tags" href="javascript:">
                                            Lahore
                                        </a>
                                        <a class="favorite" href="javascript:">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="content">
                                <div class="gap">
                                    <h3><a href="{{ route('front.search') }}">Lahore kalanders Hall <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                    <div><i class="fa fa-map-marker"></i> Lahore, Pakistan</div>
                                </div>
                                <div class="reviews">
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    (89 review)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Popular locations Start -->
        <section class="wide-tb-120 bg-light-gray">
            <div class="container">
                <div class="section-title text-center">
                    <h1>Popular locations</h1>
                    <p>Popular Locations for Hall booking</p>
                </div>
                <div class="row justify-content-space-between">
                    <div class="col-lg-3 col-md-4 mx-auto d-lg-block d-none">
                        <div class="popular-locations">
                            <div class="overlay-box">
                                <h3><a href="{{ route('front.search') }}">Islamabad <span>26 Halls</span></a></h3>
                                <a class="iconlink" href="{{ route('front.search') }}"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <img src="{{ asset('assets') }}/images/locations/location_img_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row h-100">
                            <div class="col-md-6 col-lg-4 mb-0">
                                <div class="popular-locations">
                                    <div class="overlay-box">
                                        <h3><a href="{{ route('front.search') }}">Peshawer <span>42 Halls</span></a></h3>
                                        <a class="iconlink" href="{{ route('front.search') }}"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <img src="{{ asset('assets') }}/images/locations/location_img_2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mt-auto order-lg-last mb-0">
                                <div class="popular-locations">
                                    <div class="overlay-box">
                                        <h3><a href="{{ route('front.search') }}">Multan <span>141 Halls</span></a></h3>
                                        <a class="iconlink" href="{{ route('front.search') }}"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <img src="{{ asset('assets') }}/images/locations/location_img_5.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6  mb-0">
                                <div class="popular-locations">
                                    <div class="overlay-box">
                                        <h3><a href="{{ route('front.search') }}">Karachi <span>67 Halls</span></a></h3>
                                        <a class="iconlink" href="{{ route('front.search') }}"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <img src="{{ asset('assets') }}/images/locations/location_img_3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 mt-lg-auto mb-0">
                                <div class="popular-locations">
                                    <div class="overlay-box">
                                        <h3><a href="{{ route('front.search') }}">Lahore <span>59 Halls</span></a></h3>
                                        <a class="iconlink" href="{{ route('front.search') }}"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <img src="{{ asset('assets') }}/images/locations/location_img_4.jpg" alt="">
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Popular locations End -->

        <!-- Callout Style Main Start -->
        <section class="callout-main">
            <div class="container-fluid pl-0">
                <div class="row">
                    <div class="col-lg-6" style="background: url({{ asset('assets') }}/images/callout_img.jpg) center center no-repeat; background-size: cover;">
                        <img src="{{ asset('assets') }}/images/callout_img.jpg" class="d-lg-none invisible" alt="">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="callout-text">
                            <div class="section-title">
                                <h1>The Best Hall Booking Service</h1>
                            </div>
                            <p class="lead">Contact us to select the best and affordable Hall for you event all over the Country.</p>
                            <a href="{{ route('front.contact') }}" class="btn btn-default btn-rounded btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout Style Main End -->

        <!-- Customer Feedback Start -->
        <section class="wide-tb-90">
            <div class="container">
                <div class="section-title text-center">
                    <h1>feedback from our customers</h1>
                    <p>Excepteur sint occaecat cupidatat non proident sunt</p>
                </div>
                <div class="owl-carousel owl-theme dots-black" id="slider-feedback">
                    <!-- Customer Testimonials -->
                    <div class="item">
                        <div class="customer-feedback-wrap">
                            <div class="content">
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                                Sed ut perspiciatis unde omnis iste nat error sit voluptatem accusantium doau dantium totam rem aperiam eaque.
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                            <div class="name-wrap">
                                <img src="{{ asset('assets') }}/images/feedback_1.jpg" alt="">
                                <div class="text">
                                    <h3>Mark Hunter</h3>
                                    <div>New York, USA</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Customer Testimonials -->

                    <!-- Customer Testimonials -->
                    <div class="item">
                        <div class="customer-feedback-wrap">
                            <div class="content">
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                                Sed ut perspiciatis unde omnis iste nat error sit voluptatem accusantium doau dantium totam rem aperiam eaque.
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                            <div class="name-wrap">
                                <img src="{{ asset('assets') }}/images/feedback_2.jpg" alt="">
                                <div class="text">
                                    <h3>Andrew Lincoln</h3>
                                    <div>New York, USA</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Customer Testimonials -->

                    <!-- Customer Testimonials -->
                    <div class="item">
                        <div class="customer-feedback-wrap">
                            <div class="content">
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                                Sed ut perspiciatis unde omnis iste nat error sit voluptatem accusantium doau dantium totam rem aperiam eaque.
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                            <div class="name-wrap">
                                <img src="{{ asset('assets') }}/images/feedback_3.jpg" alt="">
                                <div class="text">
                                    <h3>Mark Hunter</h3>
                                    <div>New York, USA</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Customer Testimonials -->
                </div>
            </div>
        </section>
        <!-- Customer Feedback End -->

    </main>

    @extends('front_view.components.footer')
    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Modal -->
    <div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="login_form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h2 class="m-0" >Sign In</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>

                    <ul class="nav nav-pills mb-3 horizontal-tab-second justify-content-center nav-fill pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active show" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Log In</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-register-tab" data-toggle="pill" href="#pills-hr-vendor" role="tab" aria-controls="pills-hr-vendor" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="p-3 px-4 pt-0">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <form>
                                    <div class="form-group">
                                        <!-- <div class="alert alert-primary" role="alert">
                                            Username: <strong>vendor</strong> / <strong>couple</strong><br>
                                            Password: <strong>test</strong>
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username/Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox form-dark">
                                            <input type="checkbox" class="custom-control-input" id="customCheck112">
                                            <label class="custom-control-label" for="customCheck112">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-rounded mt-3">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-hr-vendor" role="tabpanel" aria-labelledby="pills-register-tab">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="dgest" name="dgest" class="custom-control-input">
                                                    <label class="custom-control-label" for="dgest">Couple</label>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="owner" name="dgest" class="custom-control-input">
                                                    <label class="custom-control-label" for="owner">Vendor</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" id="username2" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password" id="password1">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text" name="first_name" id="first-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text" name="last_name" id="last-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email Address" name="email" id="email" value="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-rounded mt-3">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:27:44 GMT -->
</html>
