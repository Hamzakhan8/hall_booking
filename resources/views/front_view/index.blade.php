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
                <div class="row">
                    <div class="col-xl-9 col-lg-12 mx-auto">
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
                                <div class="d-flex justify-content-center">
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
                                    <div class="col-12 col-md-3">
                                        <button type="submit" class="btn btn-default text-nowrap btn-block" >Search Now</button>
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

    <!-- Modal -->
    <div class="modal fade front_login_modal" id="login_form" tabindex="-1" aria-labelledby="login_form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h2 style="color: #00aeaf" class="m-0" >Be a Couple | Hall</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>

                    <ul class="nav nav-pills mb-3 horizontal-tab-second justify-content-center nav-fill pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active show login_panel_title" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Log In</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link register_panel_title" id="pills-register-tab" data-toggle="pill" href="#pills-hr-vendor" role="tab" aria-controls="pills-hr-vendor" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="p-3 px-4 pt-0">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active login_panel" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <form action="{{ route('auth.login') }}" method="POST">
                                @csrf
                                    @if ($errors && (is_array($errors) || $errors->all()))
                                    <div class="alert alert-danger" role="alert">
                                        <strong class="text-danger">Errors encounteded!</strong>
                                        <br>
                                        <ul>
                                            @foreach ((is_array($errors) ? $errors : $errors->all()) as $error)
                                            <li>
                                                <strong>{{ $error }}</strong>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <input type="text" required class="form-control" name="username" value="{{ App\Models\User::first()->username }}" id="exampleInputEmail1" placeholder="Username/Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required class="form-control" name="password" value="password" id="exampleInputPassword1" placeholder="Password">
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
                            <div class="tab-pane fade register_panel" id="pills-hr-vendor" role="tabpanel" aria-labelledby="pills-register-tab">
                                <form action="{{ route('auth.register') }}" method="POST">
                                @csrf
                                    @if ($errors && (is_array($errors) || $errors->all()))
                                            <div class="alert alert-danger" role="alert">
                                                <strong class="text-danger">Errors encounteded!</strong>
                                                <br>
                                                <ul>
                                                    @foreach ((is_array($errors) ? $errors : $errors->all()) as $error)
                                                    <li>
                                                        <strong>{{ $error }}</strong>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                    @endif
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="dgest" name="role" value="couple" class="custom-control-input">
                                                    <label class="custom-control-label" for="dgest">Couple</label>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="owner" name="role" value="hall" class="custom-control-input">
                                                    <label class="custom-control-label" for="owner">Hall</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" required type="text" name="username" id="username2">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" required type="password" name="password" id="password1">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" required type="text" name="first_name" id="first-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" required type="text" name="last_name" id="last-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required type="email" placeholder="Email Address" name="email" id="email">
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
