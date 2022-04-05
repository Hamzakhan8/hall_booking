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

<!-- Mirrored from wporganic.com/html/weddingdir/search-result-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:47 GMT -->
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

    <!--  Search Result Header Start -->
    <section class="search-result-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1>Find the Perfect Hall Vendor</h1>
                    <p class="lead">Search over 360,000 Halls with reviews, pricing, availability and more</p>
                    <div class="input-group">
                        <input type="text" aria-label="First name" class="form-control form-light" placeholder="(E.g. Clifton Springs Weddings)">
                        <input type="text" aria-label="Last name" class="form-control form-light left-border" placeholder="Where">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-default">Search Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-by">
                <strong>View By</strong>
                <a href="javascript:" class="selected-tags">New York <span>X</span></a>
                <a href="javascript:" class="selected-tags">Buffalo <span>X</span></a>
                <a href="javascript:" class="btn btn-link btn-link-primary">Clear all</a>
            </div>
        </div>
    </section>
    <!--  Search Result Header End -->

    <main id="body-content">
        <section class="wide-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="row sidebar-widgets">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#categoriestypes" role="button" aria-expanded="false" class="link" aria-controls="categoriestypes">
                                        <h3 class="widget-title">Types of Categories <i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="categoriestypes">
                                        <div>
                                            <div class="inner">
                                                <p><a href="javascript:"><strong>All Categories</strong></a></p>


                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:"></a></li>
                                                    <li><a href="javascript:">Hotel Weddings</a></li>
                                                    <li><a href="javascript:">Hotel Weddings</a></li>
                                                    <li><a href="javascript:">Country Club Weddings</a></li>
                                                    <li><a href="javascript:">Restaurant Weddings</a></li>
                                                    <li><a href="javascript:">Rooftop Weddings</a></li>
                                                </ul>
                                                <div class="view-all">
                                                    <a href="javascript:" class="btn btn-link-default p-0">+ View More</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#city" role="button" aria-expanded="false" class="link" aria-controls="city">
                                        <h3 class="widget-title">City<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="city">
                                        <div>
                                            <div class="inner">
                                                <p>
                                                    <input type="text" class="form-control" placeholder="Enter city/town">
                                                </p>

                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:">Buffalo</a></li>
                                                    <li><a href="javascript:">Rochester</a></li>
                                                    <li><a href="javascript:">Canandaigua</a></li>
                                                    <li><a href="javascript:">Geneva</a></li>
                                                    <li><a href="javascript:">Niagara Falls</a></li>
                                                    <li><a href="javascript:">Lockport</a></li>
                                                    <li><a href="javascript:">East Aurora</a></li>
                                                </ul>
                                                <div class="view-all">
                                                    <a href="javascript:" class="btn btn-link-default p-0">+ View More</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#availability" role="button" aria-expanded="false" class="link" aria-controls="availability">
                                        <h3 class="widget-title">Availability<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="availability">
                                        <div>
                                            <div class="inner">
                                                <div class="datepicker-inline">
                                                    <div data-toggle-inline="datepicker"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#capacity" role="button" aria-expanded="false" class="link" aria-controls="capacity">
                                        <h3 class="widget-title">Maximum Capacity <i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="capacity">
                                        <div>
                                            <div class="inner">
                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="99">
                                                    <label class="custom-control-label" for="99">0 - 99</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="199">
                                                    <label class="custom-control-label" for="199">100 - 199</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="299">
                                                    <label class="custom-control-label" for="299">200 - 299</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="399">
                                                    <label class="custom-control-label" for="399">300 - 399</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="400+">
                                                    <label class="custom-control-label" for="400+">400+</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#settings" role="button" aria-expanded="false" class="link" aria-controls="settings">
                                        <h3 class="widget-title">Settings<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="settings">
                                        <div>
                                            <div class="inner">
                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="indoor">
                                                    <label class="custom-control-label" for="indoor">Indoor</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="covered">
                                                    <label class="custom-control-label" for="covered">Covered Outdoor</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="uncovered">
                                                    <label class="custom-control-label" for="uncovered">Uncovered Outdoor</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#amenities" role="button" aria-expanded="false" class="link" aria-controls="amenities">
                                        <h3 class="widget-title">Amenities<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="amenities">
                                        <div>
                                            <div class="inner">
                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="accommodations">
                                                    <label class="custom-control-label" for="accommodations">Accommodations</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="barservices">
                                                    <label class="custom-control-label" for="barservices">Bar Services</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="catering">
                                                    <label class="custom-control-label" for="catering">Catering Services</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="cleanup">
                                                    <label class="custom-control-label" for="cleanup">Clean Up</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="eventplanner">
                                                    <label class="custom-control-label" for="eventplanner">Event Planner</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="eventrentals">
                                                    <label class="custom-control-label" for="eventrentals">Event Rentals</label>
                                                </div>

                                                <div class="view-all">
                                                    <a href="javascript:" class="btn btn-link-default p-0">+ View More</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Secondary End -->

                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="result-count">
                            <strong>244 results:</strong>
                            <ul class="nav nav-pills theme-tabbing list-style-map" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link show active" id="pills-listing-tab" data-toggle="pill" href="#pills-listing" role="tab" aria-controls="pills-listing" aria-selected="false"><i class="fa fa-list-ul"></i> List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-images-tab" data-toggle="pill" href="#pills-images" role="tab" aria-controls="pills-images" aria-selected="true"><i class="fa fa-th-large"></i> Images</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false"><i class="fa fa-map-marker"></i> Map</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content theme-tabbing search-result-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-listing" role="tabpanel" aria-labelledby="pills-listing-tab">
                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <span class="featured">
                                                    <i class="fa fa-star"></i>
                                                    <span>Featured</span>
                                                </span>
                                                <a href="{{ route('front.hall.details') }}"><img src="{{ asset('assets') }}/images/search/search_img_1.jpg" alt="" class="rounded"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="{{ route('front.hall.details') }}" class="favorite active"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result Pagination -->
                                <div class="theme-pagination">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Post Pagination -->
                            </div>
                            <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="javascript:">
                                                    <img src="{{ asset('assets') }}/images/weddings/wedding_listing_1.jpg" alt="">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">
                                                        <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span>
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="javascript.html">
                                                            Fashion
                                                        </a>
                                                        <a class="favorite" href="javascript.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="javascript:">Happy Wedding Fashions <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Surat, Gujrat, India</div>
                                                </div>
                                                <div class="reviews">
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    (6 review)
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="javascript:">
                                                    <img src="{{ asset('assets') }}/images/weddings/wedding_listing_2.jpg" alt="">
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
                                                        <a class="tags" href="javascript.html">
                                                            Photography
                                                        </a>
                                                        <a class="favorite" href="javascript.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="javascript:">Cool Wed Photography <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Surat, Gujrat, India</div>
                                                </div>
                                                <div class="reviews">
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    (6 review)
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="javascript:">
                                                    <img src="{{ asset('assets') }}/images/weddings/wedding_listing_3.jpg" alt="">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">
                                                        <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span>
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="javascript.html">
                                                            Flora
                                                        </a>
                                                        <a class="favorite" href="javascript.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="javascript:">Lotus Wedding Florist <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Surat, Gujrat, India</div>
                                                </div>
                                                <div class="reviews">
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    (6 review)
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                                <div id="map-holder">
                                    <div id="map_extended" class="vendor-single-popup-wrap">
                                        <p>This will be replaced with the Google Map.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
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

                    <ul class="nav nav-pills mb-3 horizontal-tab-second justify-content-center nav-fill pt-2" id="pills-tab1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active show" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Log In</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-register-tab" data-toggle="pill" href="#pills-hr-vendor" role="tab" aria-controls="pills-hr-vendor" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="p-3 px-4 pt-0">

                        <div class="tab-content" id="pills-tabContent1">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <form>
                                    <div class="form-group">
                                        <div class="alert alert-primary" role="alert">
                                            Username: <strong>vendor</strong> / <strong>couple</strong><br>
                                            Password: <strong>test</strong>
                                        </div>
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

    <!-- Request Quote Modal -->
    <div class="modal fade" id="request_quote" tabindex="-1" aria-labelledby="request_quote" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h3 class="m-0" >Request A Quote</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-3 px-4 pt-0">
                        <div class="request-quote-form">
                            <div class="form-group">
                                <input type="text" placeholder="First and last name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Phone Number" class="form-control" />
                            </div>
                            <div class="form-group pos-rel">
                                <input type="text" class="form-control" data-toggle="datepicker" placeholder="Choose Date" />
                            </div>
                            <div class="form-group">
                                <textarea rows="6" placeholder="Your message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <p><strong><small class="txt-orange">Preferred Contact Method</small></strong></p>

                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Call</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Email</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3">Video call</label>
                                </div>
                            </div>
                            <div class="form-group">
                               <small class="form-text text-muted">By clicking <span class="txt-orange">'Request pricing'</span>, I agree to WeddingDir’s <a href="javascript:" class="text-underline">Privacy Policy</a> and <a href="javascript:">Terms of Use</a> </small>
                            </div>
                            <button type="button" class="btn btn-primary">Request Pricing</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Quote Modal -->

    <!-- All The JS Files
      ================================================== -->
      @extends('front_view.components.scripts')

</body>

<!-- Mirrored from wporganic.com/html/weddingdir/search-result-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:47 GMT -->
</html>
