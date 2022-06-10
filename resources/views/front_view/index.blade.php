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
            <h1>Book Hall</h1>
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
            @if (empty($slider_images) || $slider_images === null)
                <div class="item">
                    <div class="home-slider">
                    <img height="500px" src="{{ asset('assets/images/weddings/1.jfif') }}" alt="slider images">
                    </div>
                </div>
                <div class="item">
                    <div class="home-slider">
                    <img height="500px" src="{{ asset('assets/images/weddings/1.jfif') }}" alt="slider images">
                    </div>
                </div>
                <div class="item">
                    <div class="home-slider">
                    <img height="500px" src="{{ asset('assets/images/weddings/1.jfif') }}" alt="slider images">
                    </div>
                </div>
                @else
                @foreach (json_decode($slider_images) as $slide_img)
                <div class="item">
                    <div class="home-slider">
                    <img height="500px" src="{{ asset('storage/slider_imgs/'.$slide_img) }}" alt="slider images">
                    </div>
                </div>
                @endforeach
            @endif
            <!-- Home Slider Images -->
        </div>

        <div class="slider-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-12">
                        <h1>FIND the Perfect Hall</h1>
                        <p class="lead txt-white text-center">Search over 360,000 Halls with reviews, pricing, availability and more</p>
                        <div class="slider-form rounded">
                            @if (Session::has('not found'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ Session::get('not found') }}</strong>
                            </div>
                            @endif
                            <form action="{{ route('front.search.store') }}" method="post">
                                    @csrf
                                <div class="make_change d-flex">
                                    <div class="col-12 col-md-5 left-border">
                                        <select class="form-light-select theme-combo home-select-2" required name="category_id">
                                            <option>Choose Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-5 left-border">
                                        <select class="form-light-select theme-combo home-select-2" required name="city">
                                            <option>Choose Location</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city }}">{{ $city }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 form-btn col-md-3">
                                        <button type="submit" class="btn btn-default" >Search Now</button>
                                    </div>
                                </div>
                            </form>
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
                    @foreach ($halls as $hall)
                        @php
                            $decode = json_decode($hall->images);
                        @endphp
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="wedding-listing">
                                    <div class="img">
                                        <a href="{{ route('front.search.details', $hall->id) }}">
                                            <img height="263px" src="{{ asset('storage/hall_img/'.$decode[0]) }}" alt="Hall image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="gap">
                                            <h3><a href="{{ route('front.search.details', $hall->id) }}">{{ $hall->title }}<span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                            <div><i class="fa fa-map-marker"></i> {{ $hall->location }} city</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                <div class="owl-carousel owl-theme dots-black" id="slider-feedback">

                    @foreach ($list_halls as $list_hall)
                                    @php
                                    $decode = json_decode($list_hall->images);
                                @endphp
                        <div class="item">
                            <div class="wedding-listing">
                                <div class="img">
                                    <a href="{{ route('front.search.details', $list_hall->id) }}">
                                        <img height="263px" width="263px" src="{{ asset('storage/hall_img/'.$decode[0]) }}" alt="Hall image">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="gap">
                                        <h3><a href="{{ route('front.search.details', $list_hall->id) }}">{{ $list_hall->title }}<span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                        <div><i class="fa fa-map-marker"></i> {{ $list_hall->location }} city</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- Popular locations End -->

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

        <!-- Customer Feedback Start -->
        <section class="wide-tb-90">
            <div class="container">
                <div class="section-title text-center">
                    <h1>feedback from our customers</h1>
                </div>
                <div class="owl-carousel owl-theme dots-black" id="slider-feedback">
                    <!-- Customer Testimonials -->
                    @foreach ($halls as $hall)
                        @foreach ($hall->comments as $comments)
                            <div class="item">
                                <div class="customer-feedback-wrap">
                                    <div class="content">
                                        <div class="icon"><i class="weddingdir_chat"></i></div>
                                        {{ $comments->comment }}
                                    </div>
                                    <div class="name-wrap">
                                        <div class="text">
                                            <h3>{{ $comments->username }}</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @endforeach
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

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:27:44 GMT -->
</html>
