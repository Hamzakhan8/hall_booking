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

<!-- Mirrored from wporganic.com/html/weddingdir/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:23 GMT -->
</html>

