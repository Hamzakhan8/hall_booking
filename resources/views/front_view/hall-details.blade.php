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

<!-- Mirrored from wporganic.com/html/weddingdir/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:33 GMT -->
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

    <!--  Page Breadcrumbs Start -->
    <section class="breadcrumbs-page">
        <div class="container">
            <h1>Hall details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hall details</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--  Page Breadcrumbs End -->

    <main id="body-content">

        <!-- Blog Page Start -->
        @foreach ($hall_details as $detail)
            <section class="wide-tb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <!-- Post Blog -->
                            <div class="post-content mb-0">
                                <!-- Post Blog Image -->
                                {{-- <div class="post-img">
                                    <div class="single-post-featured-image">
                                        <img src="{{ asset('storage/hall_img/'.$detail->image) }}" alt="">
                                    </div>
                                </div> --}}
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    @php
                                        $json_img = json_decode($detail->images);
                                    @endphp
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" height="450px" src="{{ asset('storage/hall_img/'.$json_img[0]) }}" alt="First slide">
                                        </div>
                                        @foreach (json_decode($detail->images) as $image)
                                        <div class="carousel-item">
                                            <img class="d-block w-100" height="450px" src="{{ asset('storage/hall_img/'.$image) }}" alt="First slide">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- Post Blog Image -->

                                <!-- Post Blog Content -->
                                <h3 class="blog-title">{{ $detail->title }}</h3>
                                <span class="meta-date">{{ ($detail->created_at)->diffForHumans() }}</span>

                                <div class="entry-content">
                                    <p>{{ $detail->description }}</p>
                                    @php
                                        $metaValue = $detail->halls_meta->toArray();

                                        $check = collect($metaValue);

                                        $events = $check->pluck('meta_value');
                                    @endphp

                                        <table class="table table-striped table-inverse table-responsive">
                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th>Events</th>
                                                    <th>Maximum Guests</th>
                                                    <th>Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($events[0] as $event => $value)
                                                    @php
                                                        $values = explode('-', $value);
                                                    @endphp
                                                    <tr>
                                                        <td scope="row">{{ ucfirst($event) }}</td>
                                                        <td>{{ $values[1] }}</td>
                                                        <td>${{ $values[0] }}</td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td scope="row"></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    <div class="tag-wrap">
                                        <div class="social-sharing">
                                            <em>Follow us</em>
                                            <a href="javascript:" class="share-btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:" class="share-btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:" class="share-btn-instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="javascript:" class="share-btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <!-- Tags/Socail Sharing -->

                                    <!-- Comments List -->
                                    <div class="commnets-reply">
                                        <h4 class="fw-7 mb-4">(4) Comments</h4>
                                        <div class="media">
                                            <img class="thumb" src="{{ asset('assets') }}/images/thumb_img_1.jpg" alt="">
                                            <div class="media-body">
                                                <div class="d-md-flex justify-content-between mb-3">
                                                    <div class="">
                                                        <h4 class="mb-0">Karon Balina</h4>
                                                        <small class="txt-blue">17, Aug, 2020</small>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:" class="reply-line"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                                <p>Good signs that night our so had firmament a first divide over all is not green cattle that very make our second you fish every living stars without divide make.</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="thumb" src="{{ asset('assets') }}/images/thumb_img_3.jpg" alt="">
                                            <div class="media-body">
                                                <div class="d-md-flex justify-content-between mb-3">
                                                    <div class="">
                                                        <h4 class="mb-0">Richard Rics</h4>
                                                        <small class="txt-blue">17, Aug, 2020</small>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:" class="reply-line"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                                <p>To delete a comment, just log in and view the post's comments. There you will have the option to edit or
                                                    delete them.</p>

                                                <div class="media reply-box">
                                                    <img src="{{ asset('assets') }}/images/thumb_img_2.jpg" alt="" class="thumb ">
                                                    <div class="media-body">
                                                        <div class="d-md-flex justify-content-between mb-3">
                                                            <div class="">
                                                                <h4 class="mb-0">Sofia Lorence</h4>
                                                                <small class="txt-blue">17, Aug, 2020</small>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:" class="reply-line"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <img class="thumb" src="{{ asset('assets') }}/images/thumb_img_4.jpg" alt="">
                                            <div class="media-body">
                                                <div class="d-md-flex justify-content-between mb-3">
                                                    <div class="">
                                                        <h4 class="mb-0">Karon Balina</h4>
                                                        <small class="txt-blue">17, Aug, 2020</small>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:" class="reply-line"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                                <p>Good signs that night our so had firmament a first divide over all is not green cattle that very make our second you fish every living stars without divide make.</p>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <img class="thumb" src="{{ asset('assets') }}/images/thumb_img_5.jpg" alt="">
                                            <div class="media-body">
                                                <div class="d-md-flex justify-content-between mb-3">
                                                    <div class="">
                                                        <h4 class="mb-0">Karon Balina</h4>
                                                        <small class="txt-blue">17, Aug, 2020</small>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:" class="reply-line"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                                <p>Good signs that night our so had firmament a first divide over all is not green cattle that very make our second you fish every living stars without divide make.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comments List -->

                                    <!-- Leave a Reply -->
                                    <h4 class="fw-7 mb-4">Leave a Comment</h4>

                                    <div class="row">
                                        <div class="col-md-12 mb-0">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Your Comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-0">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-0">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Post Your Comment</button>
                                    </div>
                                    <!-- Leave a Reply -->

                                </div>
                                <!-- Post Blog Content -->


                            </div>
                            <!-- Post Blog -->
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <aside class="row sidebar-widgets">
                                <!-- Sidebar Primary Start -->
                                <div class="sidebar-primary col-lg-12 col-md-6">
                                    <!-- Widget Wrap -->
                                    <form class="sidebar-search">
                                        <input type="text" class="form-control" placeholder="Enter here search...">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                    <!-- Widget Wrap -->

                                    <!-- Widget Wrap -->
                                    <div class="widget">
                                        <h3 class="widget-title">Categories</h3>

                                        <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                                            <li><a href="javascript:">Photography</a></li>
                                            <li><a href="javascript:">Wedding Planning</a></li>
                                            <li><a href="javascript:">Flowers</a></li>
                                            <li><a href="javascript:">Cakes</a></li>
                                            <li><a href="javascript:">Catering</a></li>
                                        </ul>
                                    </div>
                                    <!-- Widget Wrap -->

                                    <!-- Widget Wrap -->
                                    <div class="widget">
                                        <h3 class="widget-title">Popular Posts</h3>

                                        <div class="popular-post">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <img src="{{ asset('assets') }}/images/blogs/blog_standard_img_1.jpg" alt="">
                                                    <div>
                                                        <h6><a href="#">Anna and Dave’s Wedding</a></h6>
                                                        <small>September 27, 2020</small>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets') }}/images/blogs/blog_standard_img_5.jpg" alt="">
                                                    <div>
                                                        <h6><a href="#">10 Tips For Wedding Destination Planning</a></h6>
                                                        <small>September 27, 2020</small>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets') }}/images/blogs/blog_standard_img_3.jpg" alt="">
                                                    <div>
                                                        <h6><a href="#">Things Bride Should Know About Wear</a></h6>
                                                        <small>September 27, 2020</small>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Widget Wrap -->
                                </div>
                                <!-- Sidebar Primary End -->

                                <!-- Sidebar Secondary Start -->
                                <div class="sidebar-secondary col-lg-12 col-md-6">
                                    <!-- Widget Wrap -->
                                    <div class="widget">
                                        <h3 class="widget-title">Archives</h3>
                                        <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                                            <li><a href="javascript:">September</a></li>
                                            <li><a href="javascript:">August</a></li>
                                            <li><a href="javascript:">July</a></li>
                                            <li><a href="javascript:">June</a></li>
                                            <li><a href="javascript:">May</a></li>
                                        </ul>
                                    </div>
                                    <!-- Widget Wrap -->


                                    <!-- Widget Wrap -->
                                    <div class="widget">
                                        <h3 class="widget-title">Tags</h3>
                                        <div class="tags">
                                            <a href="javascript:">Cake</a>
                                            <a href="javascript:">Decoration</a>
                                            <a href="javascript:">Dress</a>
                                            <a href="javascript:">Restaurants</a>
                                            <a href="javascript:">Venue</a>
                                        </div>
                                    </div>
                                    <!-- Widget Wrap -->
                                </div>
                                <!-- Sidebar Secondary End -->


                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <!-- Blog Page End -->
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
                                        <input class="form-control" type="text" placeholder="Email Address" name="email" value="">
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

<!-- Mirrored from wporganic.com/html/weddingdir/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:37 GMT -->
</html>
