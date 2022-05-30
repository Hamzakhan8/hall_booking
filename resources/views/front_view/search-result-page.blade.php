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
                    <form action="{{ route('front.search.by_name') }}" method="POST">
                        @csrf
                        @if (Session::has('not found'))
                        <div class="alert alert-warning" role="alert">
                            <strong>{{ Session::get('not found') }}</strong>
                        </div>
                        @endif
                        <div class="input-group">
                            <input type="text" name="hall_name" class="form-control form-light" required placeholder="(E.g. Clifton Springs Weddings)">
                            <input type="text" name="hall_city" class="form-control form-light left-border" required placeholder="Where">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-default">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Halls</li>
                </ol>
            </nav>
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


                                                <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                                                    @if (isset($halls))
                                                        @foreach ($halls as $hall)
                                                        <li><a style="cursor: pointer">{{ $hall->hallCategory->category }}</a></li>
                                                        @endforeach

                                                        @elseif (isset($by_category))
                                                        @foreach ($by_category as $by_cat_hall)
                                                        <li><a style="cursor: pointer">{{ $by_cat_hall->hallCategory->category }}</a></li>
                                                        @endforeach

                                                        @elseif (isset($by_name))
                                                        @foreach ($by_name as $by_name_hall)
                                                        <li><a style="cursor: pointer">{{ $by_name_hall->hallCategory->category }}</a></li>
                                                        @endforeach

                                                        @elseif (isset($list_halls))
                                                        @foreach ($list_halls as $list_hall)
                                                        <li><a style="cursor: pointer">{{ $list_hall->hallCategory->category }}</a></li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="result-count">
                            @if (isset($halls))
                                <strong>{{ $halls->count() }} results:</strong>
                            @elseif (isset($by_category))
                                <strong>{{ $by_category->count() }} results:</strong>
                            @elseif (isset($by_name))
                            <strong>{{ $by_name->count() }} results:</strong>
                            @elseif (isset($list_halls))
                                <strong>{{ $list_halls->count() }} results:</strong>
                            @endif
                        </div>

                        <div class="tab-content theme-tabbing search-result-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-listing" role="tabpanel" aria-labelledby="pills-listing-tab">
                                <!-- Search Result List -->
                                @if (isset($halls))
                                    @foreach ($halls as $hall)
                                        @php
                                            $image = json_decode($hall->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $hall->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $hall->id) }}">{{ $hall->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $hall->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $hall->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @elseif (isset($by_category))
                                {{-- results by categories --}}
                                    @foreach ($by_category as $by_cat_halls)
                                        @php
                                            $image = json_decode($by_cat_halls->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $by_cat_halls->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $by_cat_halls->id) }}">{{ $by_cat_halls->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $by_cat_halls->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $by_cat_halls->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @elseif (isset($by_name))
                                {{-- results by names and location --}}
                                    @foreach ($by_name as $by_name_halls)
                                        @php
                                            $image = json_decode($by_name_halls->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $by_name_halls->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $by_name_halls->id) }}">{{ $by_name_halls->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $by_name_halls->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $by_name_halls->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @elseif (isset($list_halls))
                                    {{-- results by names and location --}}
                                    @foreach ($list_halls as $list_hall)
                                        @php
                                            $image = json_decode($list_hall->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $list_hall->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $list_hall->id) }}">{{ $list_hall->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $list_hall->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $list_hall->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <!-- Search Result List -->

                                <!-- Search Result Pagination -->
                                @if (isset($halls))
                                    {{ $halls->links() }}

                                @elseif (isset($by_category))
                                    {{ $by_category->links() }}

                                @elseif (isset($by_name))
                                    {{ $by_name->links() }}

                                @elseif (isset($list_halls))
                                    {{ $list_halls->links() }}
                                @endif
                                <!-- Post Pagination -->
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
                                        <input type="text" required class="form-control" name="username" id="exampleInputEmail1" placeholder="Username/Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
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

<!-- Mirrored from wporganic.com/html/weddingdir/search-result-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:47 GMT -->
</html>
