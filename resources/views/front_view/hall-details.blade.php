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
                                <h3 id="hall_detail" data-id="{{ $detail->id }}" data-title="{{ $detail->title }}" class="blog-title">
                                    {{ $detail->title }}
                                </h3>
                                <span class="meta-date">{{ ($detail->created_at)->diffForHumans() }}</span>

                                <div class="entry-content">
                                    <p>{{ $detail->description }}</p>
                                    @php
                                        $metaValue = $detail->halls_meta->toArray();

                                        $check = collect($metaValue);

                                        $events = $check->pluck('meta_value');
                                    @endphp

                                        <table class="table table-striped table-inverse">
                                            <thead class="thead-inverse" style="color: #00aeaf">
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
                                                @foreach ($events[1] as $social => $links)
                                                    @php
                                                        $i = "fa fa-".$social."";
                                                        $class = "share-btn-".$social."";
                                                    @endphp
                                                    <a href="{{ $links }}" class="{{ $class }}"><i class="{{ $i }}"></i><a>
                                                @endforeach
                                            </div>
                                        </div>
                                    <!-- Tags/Socail Sharing -->

                                    <!-- Comments List -->
                                    <div class="commnets-reply" style="overflow-y: scroll;height:30rem">
                                        <h4 class="fw-7 mb-4">({{ $detail->comments->count() }}) Comments</h4>
                                        @foreach ($detail->comments as $comments)
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class="d-md-flex justify-content-between mb-3">
                                                        <div class="">
                                                            <h4 class="mb-0">{{ $comments->username }}</h4>
                                                            <small class="txt-blue">{{ ($comments->created_at)->diffForHumans() }}</small>
                                                        </div>
                                                        <div>
                                                            <a  class="frontCommentReply_btn"
                                                                style="cursor: pointer"
                                                                data-comment-id="{{ $comments->id }}"
                                                                data-comment-username="{{ $comments->username }}"
                                                                data-comment-hallId="{{ $comments->hall_id }}"
                                                                data-comment-hallName="{{ $comments->hall_name }}"
                                                                class="reply-line"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        {{ $comments->comment }}
                                                    </p>
                                                </div>
                                            </div>
                                                @foreach ($comments->reply as $reply)
                                                    <div class="media reply-box ml-3">
                                                        <div class="media-body">
                                                            <div class="d-md-flex justify-content-between mb-3">
                                                                <div class="">
                                                                    <h4 class="mb-0">{{ $reply->username }}</h4>
                                                                    <small class="txt-blue">{{ ($reply->created_at)->diffForHumans() }}</small>
                                                                </div>
                                                                <div>
                                                                    <a
                                                                        class="frontReplyToReply_btn"
                                                                        style="cursor: pointer"
                                                                        data-comment-id="{{ $reply->comments_id }}"
                                                                        data-reply-id="{{ $reply->id }}"
                                                                        data-reply-username="{{ $reply->username }}"
                                                                        data-reply-hallId="{{ $reply->hall_id }}"
                                                                        data-reply-hallName="{{ $reply->hall_name }}"
                                                                        ><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                            {{ $reply->reply }}
                                                        </div>
                                                    </div>
                                                {{-- reply replies --}}
                                                @foreach ($reply->re_reply as $re_reply)
                                                    <div class="media reply-box ml-5">
                                                        <div class="media-body">
                                                            <div class="d-md-flex justify-content-between mb-3">
                                                                <div class="">
                                                                    <h4 class="mb-0">{{ $re_reply->username }}</h4>
                                                                    <small class="txt-blue">{{ ($re_reply->created_at)->diffForHumans() }}</small>
                                                                </div>
                                                                <div>
                                                                    <a
                                                                    class="frontReReply_btn"
                                                                    style="cursor: pointer"
                                                                    data-comment-id="{{ $re_reply->comment_id }}"
                                                                    data-reReply-id="{{ $re_reply->id }}"
                                                                    data-reReply-username="{{ $re_reply->username }}"
                                                                    data-reReply-hallId="{{ $re_reply->hall_id }}"
                                                                    data-reReply-hallName="{{ $re_reply->hall_name }}"
                                                                    ><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                            {{ $re_reply->reply }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                            {{-- comment repies --}}

                                    </div>
                                    <!-- Comments List -->

                                    <!-- Leave a Reply -->
                                    <h4 class="fw-7 mb-4">Leave a Comment</h4>

                                    <form action="{{ route('front.hall.comment') }}" method="POST">
                                        @csrf
                                        @if (Session::has('not logged in'))
                                        <div class="alert alert-warning" role="alert">
                                            <strong>{{ Session::get('not logged in') }}</strong>
                                        </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <input type="hidden" id="append_hall_id" value="" name="hall_id">
                                                        <input type="hidden" id="append_hall_title" value="" name="hall_title">
                                                        <textarea class="form-control" rows="5" name="comment" placeholder="Write Your Comments">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" id="submit_comment" class="btn btn-primary">Post Your Comment</button>
                                            </div>
                                    </form>
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
                                            <li><a href="{{ route('front.search.by_category',[$detail->hallCategory->id,$detail->location]) }}">
                                                {{ $detail->hallCategory->category }}</a></li>
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

    <!-- Front Reply Modal -->
    <div class="modal fade" id="frontRepyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reply User's Comment</h5>
                </div>
                <div class="modal-body">
                    <form class="frontRepyModalForm" action="{{ route('front.hall.comment.reply') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message Reply To</label>
                            <input type="text" class="form-control" id="frontCommentUsername" name="comment_username">
                        </div>
                        <div class="form-group">
                            <input type="hidden" id="frontCommentId" name="comment_id">
                            <input type="hidden" id="frontCommentHallId" name="comment_hall_id">
                            <input type="hidden" id="frontCommentHallName" name="comment_hall_name">
                            <input type="text" id="frontCommentReply" name="reply" class="form-control" placeholder="Enter reply here" required>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Front Reply to Reply Modal -->
    <div class="modal fade" id="frontReRepyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reply User's Reply</h5>
                </div>
                <div class="modal-body">
                    <form class="frontRepyModalForm" action="{{ route('front.hall.reply.reply') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Reply To Reply</label>
                            <input type="text" class="form-control" id="frontReplyUsername" name="reply_username">
                        </div>
                        <div class="form-group">
                            <input type="hidden" id="frontCommentReplyId" name="comment_id">
                            <input type="hidden" id="frontReplyId" name="reply_id">
                            <input type="hidden" id="frontReplyHallId" name="reply_hall_id">
                            <input type="hidden" id="frontReplyHallName" name="reply_hall_name">
                            <input type="text" id="frontReplyToReply" name="reply" class="form-control" placeholder="Enter reply here" required>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Front ReReply Modal -->
    <div class="modal fade" id="frontReRepiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reply User's Reply</h5>
                </div>
                <div class="modal-body">
                    <form class="frontRepyModalForm" action="{{ route('front.hall.reply.reply') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Reply To Reply</label>
                            <input type="text" class="form-control" id="frontReReplyUsername" name="reply_username">
                        </div>
                        <div class="form-group">
                            <input type="hidden" id="frontReReplyCommentId" name="comment_id">
                            <input type="hidden" id="frontReReplyId" name="reply_id">
                            <input type="hidden" id="frontReReplyHallId" name="reply_hall_id">
                            <input type="hidden" id="frontReReplyHallName" name="reply_hall_name">
                            <input type="text" id="frontReReply" name="reply" class="form-control" placeholder="Enter reply here" required>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
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
